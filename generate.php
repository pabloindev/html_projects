<?php
// generate.php

// Funzione per cancellare ricorsivamente una directory
function deleteDirectory($dir) {
    if (!is_dir($dir)) {
        return;
    }
    $files = array_diff(scandir($dir), ['.', '..']);
    foreach ($files as $file) {
        $path = "$dir/$file";
        is_dir($path) ? deleteDirectory($path) : unlink($path);
    }
    rmdir($dir);
}

// Funzione per copiare ricorsivamente file e cartelle
function copyDirectory($src, $dst) {
    if (!is_dir($src)) {
        return;
    }
    if (!is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    $files = array_diff(scandir($src), ['.', '..']);
    foreach ($files as $file) {
        $srcPath = "$src/$file";
        $dstPath = "$dst/$file";
        if (is_dir($srcPath)) {
            copyDirectory($srcPath, $dstPath);
        } else {
            copy($srcPath, $dstPath);
        }
    }
}

// Chiedi il nome della cartella sorgente
echo "Inserisci il nome della cartella contenente i file PHP: ";
$sourceDirName = trim(fgets(STDIN));

// Verifica che la cartella sorgente esista
$sourceDir = __DIR__ . '/' . $sourceDirName;
if (!is_dir($sourceDir)) {
    die("Errore: La cartella '$sourceDirName' non esiste.\n");
}

// Definisci la cartella di output
$outputDir = __DIR__ . '/' . $sourceDirName . '_html';

// Cancella la cartella di output se esiste
if (is_dir($outputDir)) {
    deleteDirectory($outputDir);
    echo "Cartella '$outputDir' esistente cancellata.\n";
}

// Crea la cartella di output
mkdir($outputDir, 0755, true);
echo "Cartella '$outputDir' creata.\n";

// Copia tutti i file non-PHP e le cartelle dalla sorgente all'output
$items = array_diff(scandir($sourceDir), ['.', '..']);
foreach ($items as $item) {
    $srcPath = "$sourceDir/$item";
    $dstPath = "$outputDir/$item";
    // Ignora i file PHP
    if (is_file($srcPath) && pathinfo($srcPath, PATHINFO_EXTENSION) === 'php') {
        continue;
    }
    // Copia file non-PHP o cartelle
    if (is_dir($srcPath)) {
        copyDirectory($srcPath, $dstPath);
        echo "Copiata cartella: $dstPath\n";
    } else {
        copy($srcPath, $dstPath);
        echo "Copiato file: $dstPath\n";
    }
}

// Trova tutti i file PHP nella directory sorgente, ignorando quelli che iniziano con '_'
$files = glob($sourceDir . '/*.php');
$files = array_filter($files, function ($file) {
    return strpos(basename($file), '_') !== 0;
});

if (empty($files)) {
    echo "Nessun file PHP valido trovato in '$sourceDirName'.\n";
} else {
    foreach ($files as $file) {
        // Cattura l'output del file PHP
        ob_start();
        include $file;
        $content = ob_get_clean();

        // Nome del file HTML di output
        $outputFile = $outputDir . '/' . basename($file, '.php') . '.html';

        // Salva il contenuto come file HTML
        file_put_contents($outputFile, $content);
        echo "Generato: $outputFile\n";
    }
}

echo "Generazione completata!\n";
?>