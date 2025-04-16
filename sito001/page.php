<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA GENERICA | SOUNDWAVE Festival</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        .generic-section {
            padding: var(--spacing-4xl) 0;
            background: var(--color-dark);
        }
        .generic-content-container {
            background: var(--color-dark-2);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            max-width: 900px;
            margin: 0 auto;
            padding: var(--spacing-3xl) var(--spacing-2xl);
        }
        .generic-content-container ul 
        {
            margin-block-end: 1rem;
            padding-inline-start: 20px;
        }

        .generic-content-container h2 {
            margin-block: var(--spacing-xl) var(--spacing-lg);
        }
        .generic-content-container h3 {
            margin-block: var(--spacing-md) var(--spacing-lg);
        }
        @media (max-width: 576px) {
            .generic-content-container {padding: var(--spacing-xl) var(--spacing-md);}
        }
    </style>
</head>
<body>
    
    <?php include '_header.php'; ?>

    <div class="overlay"></div>

    <!-- Generic Static Page Section -->
    <section class="generic-section">
        <div class="container">
            <div class="generic-content-container">
                <!-- ====== Qui inserisci il titolo della pagina ====== -->
                <h1 class="page-title" >Titolo della pagina</h1>
                <!-- ====== Qui inserisci il contenuto della pagina ====== -->
                <div style="margin-top:var(--spacing-lg);">
                    <p>Contenuto della pagina da completare.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));">
        <div class="container">
            <h2 class="cta-title">Hai bisogno di aiuto?</h2>
            <p class="cta-text">Contattaci per qualsiasi richiesta utilizzando la mail <a href="mailto:info@soundwave.it" style="color:var(--color-secondary);">info@soundwave.it</a></p>
            <div class="cta-buttons">
                <a href="index.html" class="button btn-secondary">Torna alla Home</a>
                <a href="faq.html" class="button btn-primary">FAQ</a>
            </div>
        </div>
    </section>

    <?php include '_footer.php'; ?>

    <!-- Mobile Menu Toggle JS -->
    <script src="script.js"></script>
</body>
</html>
