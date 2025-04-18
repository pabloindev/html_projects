<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acquista Biglietti | SOUNDWAVE Festival</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- Regole css specifiche solo per questa pagina -->
    <style>
        .ticket-section {padding: var(--spacing-3xl) 0; background: var(--color-dark);}
        .tickets-cards {display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: var(--spacing-xl);}
        .ticket-card {
            background: var(--color-dark-2);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            display: flex; flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: var(--spacing-2xl) var(--spacing-lg);
            position: relative;
            margin-bottom: var(--spacing-xl);
        }
        .ticket-card.featured {
            border: 2px solid var(--color-primary);
        }
        .ticket-type {font-size: var(--font-size-xl); color: var(--color-primary); font-weight: 700;}
        .ticket-price {font-size: var(--font-size-2xl); font-weight: bold; margin: var(--spacing-md) 0;}
        .ticket-list {list-style: none; padding: 0; margin-bottom: var(--spacing-md);}
        .ticket-list li {color: var(--color-light-gray); font-size: var(--font-size-md); margin-bottom: var(--spacing-xs);}
        .ticket-card .button {margin-top: auto;}
        .ticket-form-section {
            background-color: var(--color-primary);
            padding: var(--spacing-3xl) 0;
            color: var(--color-dark);
        }
        .ticket-form-wrap {
            background: var(--color-white);
            padding: var(--spacing-2xl) var(--spacing-xl);
            max-width: 500px;
            margin: 0 auto;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
        }
        .ticket-form-label {font-weight: 600; color: var(--color-dark);}
        .ticket-form-group {margin-bottom: var(--spacing-lg);}
        .ticket-form input, .ticket-form select {
            margin-top: var(--spacing-xs);
            margin-bottom: 0;
        }
        .ticket-form .button {width: 100%;}
        /* Responsive per form */
        @media (max-width: 576px) {
            .ticket-form-wrap {padding: var(--spacing-xl) var(--spacing-md);}
        }
    </style>
</head>
<body>

    <?php include '_header.php'; ?>

    <div class="overlay"></div>

    <!-- HERO BANNER -->
    <section class="hero" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(0,0,0,0.7)), url('img/img1.webp'); min-height: 400px; height:50vh;">
        <div class="container" style="margin-top:100px;">
            <div class="hero-content">
                <h1 class="hero-title" style="font-size:clamp(2rem,5vw,3.5rem);">Acquista il tuo Biglietto</h1>
                <p class="hero-description">Vivi l'esperienza SOUNDWAVE! Scegli il tuo biglietto e assicurati il tuo posto al festival musicale più atteso dell'anno.</p>
            </div>
        </div>
    </section>

    <!-- TIPI DI BIGLIETTO -->
    <section class="ticket-section">
        <div class="container">
            <h2 class="section-title">Scegli il tuo biglietto</h2>
            <div class="tickets-cards">
                <div class="ticket-card">
                    <div class="ticket-type">Giornaliero</div>
                    <div class="ticket-price">€49</div>
                    <ul class="ticket-list">
                        <li>Ingresso un giorno a scelta</li>
                        <li>Accesso a tutti i palchi</li>
                        <li>Area Food & Beverage</li>
                    </ul>
                    <a href="#acquista" class="button btn-primary">Acquista</a>
                </div>
                <div class="ticket-card featured">
                    <div class="ticket-type">Abbonamento 3 Giorni</div>
                    <div class="ticket-price">€119</div>
                    <ul class="ticket-list">
                        <li>Ingresso a tutte le giornate</li>
                        <li>Gadget esclusivo festival</li>
                        <li>Accesso a tutti i palchi</li>
                        <li>Area VIP riservata</li>
                    </ul>
                    <a href="#acquista" class="button btn-primary">Acquista</a>
                </div>
                <div class="ticket-card">
                    <div class="ticket-type">VIP Experience</div>
                    <div class="ticket-price">€249</div>
                    <ul class="ticket-list">
                        <li>Accesso area VIP</li>
                        <li>Ingresso Fast Lane</li>
                        <li>Backstage Tour</li>
                        <li>Gadget e Cena con Artisti</li>
                    </ul>
                    <a href="#acquista" class="button btn-primary">Acquista</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM ACQUISTO -->
    <section class="ticket-form-section" id="acquista">
        <div class="container">
            <h2 class="section-title" style="color:white;">Completa l'acquisto</h2>
            <div class="ticket-form-wrap">
                <form class="ticket-form">
                    <div class="ticket-form-group">
                        <label for="nome" class="ticket-form-label">Nome e cognome*</label>
                        <input type="text" id="nome" name="nome" placeholder="Il tuo nome completo" required>
                    </div>
                    <div class="ticket-form-group">
                        <label for="email" class="ticket-form-label">Email*</label>
                        <input type="email" id="email" name="email" placeholder="tuo@email.com" required>
                    </div>
                    <div class="ticket-form-group">
                        <label for="tipo-biglietto" class="ticket-form-label">Tipo di biglietto*</label>
                        <select id="tipo-biglietto" name="tipo-biglietto" required>
                            <option value="">Seleziona...</option>
                            <option value="giornaliero">Giornaliero (€49)</option>
                            <option value="abbonamento">Abbonamento 3 Giorni (€119)</option>
                            <option value="vip">VIP Experience (€249)</option>
                        </select>
                    </div>
                    <div class="ticket-form-group">
                        <label for="quantita" class="ticket-form-label">Quantità*</label>
                        <input type="number" id="quantita" name="quantita" min="1" max="5" value="1" required>
                    </div>
                    <div class="ticket-form-group">
                        <label class="ticket-form-label">Metodo di pagamento*</label>
                        <select id="pagamento" name="pagamento" required>
                            <option value="">Seleziona...</option>
                            <option value="carta">Carta di credito</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                    <button type="submit" class="button btn-primary">Procedi con l'acquisto</button>
                </form>
                <p style="color:var(--color-gray); font-size:var(--font-size-sm);margin-top:var(--spacing-md);">* Dopo l'acquisto riceverai il tuo biglietto via email.<br>Assistenza: <a href="mailto:biglietti@soundwave.it" style="color:var(--color-primary);">biglietti@soundwave.it</a></p>
            </div>
        </div>
    </section>

    <!-- CTA Section (richiama il footer come in tutte le pagine) -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));">
        <div class="container">
            <h2 class="cta-title">Ci vediamo sotto il palco!</h2>
            <p class="cta-text">Entra nella community di SOUNDWAVE. Segui le nostre pagine social e resta aggiornato sulle ultime novità.</p>
            <div class="cta-buttons">
                <a href="index.html" class="button btn-secondary">Torna alla Home</a>
                <a href="#acquista" class="button btn-primary">Acquista Ora</a>
            </div>
        </div>
    </section>

    <?php include '_footer.php'; ?>

    <!-- Mobile Menu Toggle JS -->
    <script src="script.js"></script>
</body>
</html>
