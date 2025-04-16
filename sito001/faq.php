<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ | SOUNDWAVE Festival</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        .faq-section {
            padding: var(--spacing-3xl) 0;
            background: var(--color-dark);
        }
        .faq-container {
            max-width: 700px;
            margin: 0 auto;
        }
        .faq-list {
            display: flex;
            flex-direction: column;
            gap: var(--spacing-xl);
        }
        .faq-item {
            background: var(--color-dark-2);
            border-radius: var(--border-radius-md);
            box-shadow: var(--shadow-sm);
            padding: var(--spacing-xl) var(--spacing-lg);
        }
        .faq-question {
            font-size: var(--font-size-lg);
            font-weight: 700;
            color: var(--color-primary-light2);
            margin-bottom: var(--spacing-sm);
        }
        .faq-answer {
            color: var(--color-light-gray);
            font-size: var(--font-size-base);
        }
        @media (max-width: 576px) {
            .faq-item {padding: var(--spacing-lg) var(--spacing-md);}
        }
    </style>
</head>
<body>
    <?php include '_header.php'; ?>
    
    <div class="overlay"></div>

    <!-- HERO BANNER FAQ -->
    <section class="hero" style="background-image: linear-gradient(rgba(60,0,140,0.8),rgba(0,0,0,0.7)), url('img/img1.webp'); min-height:400px; height:50vh;">
        <div class="container" style="margin-top:100px;">
            <div class="hero-content">
                <h1 class="hero-title" style="font-size:clamp(2rem,5vw,3rem);">FAQ</h1>
                <p class="hero-description">Hai dubbi? Qui troverai le risposte alle domande più frequenti sul SOUNDWAVE Festival.</p>
            </div>
        </div>
    </section>


    <!-- FAQ SECTION -->
    <section class="faq-section">
        <div class="container faq-container">
            <h2 class="section-title">Domande frequenti</h2>
            <div class="faq-list">

                <div class="faq-item">
                    <div class="faq-question">Quali sono gli orari di apertura del festival?</div>
                    <div class="faq-answer">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum hendrerit faucibus. Cras cursus nulla in enim hendrerit, ut congue lectus egestas.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Posso portare cibo o bevande all'interno?</div>
                    <div class="faq-answer">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque cursus purus eu magna cursus, ac interdum sapien pulvinar. 
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">Sono previsti parcheggi nelle vicinanze?</div>
                    <div class="faq-answer">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac faucibus nisi. Morbi euismod enim in gravida molestie.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));">
        <div class="container">
            <h2 class="cta-title">Non trovi la tua domanda?</h2>
            <p class="cta-text">Scrivici una mail a <a href="mailto:info@soundwave.it" style="color:var(--color-secondary);">info@soundwave.it</a> e il nostro team ti risponderà al più presto!</p>
            <div class="cta-buttons">
                <a href="index.html" class="button btn-secondary">Torna alla Home</a>
                <a href="biglietti.html" class="button btn-primary">Acquista Biglietti</a>
            </div>
        </div>
    </section>

    <?php include '_footer.php'; ?>

    <!-- Mobile Menu Toggle JS -->
    <script src="script.js"></script>
</body>
</html>
