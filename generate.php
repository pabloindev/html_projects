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

// Trova tutti i file PHP nella directory sorgente, ignorando quelli che iniziano con '_'
$files = glob($sourceDir . '/*.php');
$files = array_filter($files, function ($file) {
    return strpos(basename($file), '_') !== 0;
});

if (empty($files)) {
    echo "Nessun file PHP valido trovato in '$sourceDirName'.\n";
    exit;
}

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

echo "Generazione completata!\n";