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
                <h1 class="page-title" >Cookie Policy di Soundwave</h1>
                <!-- ====== Qui inserisci il contenuto della pagina ====== -->
                <div style="margin-top:var(--spacing-lg);">
                    <p>Benvenuto nella Cookie Policy del sito web ufficiale di Soundwave , l'evento musicale che celebra la creatività e la passione per la musica. Questa pagina ti fornisce informazioni dettagliate sull'uso dei cookie e di altre tecnologie di tracciamento utilizzate sul nostro sito web.</p>

                    <h2>Cosa sono i cookie?</h2>
                    <p>I cookie sono piccoli file di testo che vengono memorizzati sul tuo dispositivo (computer, tablet, smartphone, ecc.) quando visiti un sito web. Questi file consentono al sito di riconoscere il tuo dispositivo e di migliorare la tua esperienza di navigazione, offrendoti contenuti personalizzati e funzionalità avanzate.</p>

                    <h2>Tipologie di cookie utilizzati</h2>
                    <h3>1. Cookie strettamente necessari</h3>
                    <p>Questi cookie sono essenziali per il corretto funzionamento del sito web e ti permettono di navigare e utilizzare le funzionalità principali. Senza questi cookie, alcune parti del sito potrebbero non funzionare correttamente.</p>
                    <ul>
                        <li>Esempi: Cookie di autenticazione, cookie per mantenere la sessione attiva.</li>
                    </ul>

                    <h3>2. Cookie di performance e analisi</h3>
                    <p>Questi cookie ci aiutano a capire come gli utenti interagiscono con il sito, raccogliendo dati anonimi sulle visite, le pagine più visitate e gli eventuali errori riscontrati. Queste informazioni ci permettono di migliorare continuamente il sito.</p>

                    <ul>
                        <li>Esempi: Google Analytics, Hotjar.</li>
                    </ul>

                    <h3>3. Cookie di funzionalità</h3>
                    <p>Questi cookie consentono al sito di ricordare le tue preferenze (come la lingua selezionata o la regione) e di offrirti funzionalità avanzate, migliorando così la tua esperienza di navigazione.</p>

                    <ul>
                        <li>Esempi: Cookie per salvare le impostazioni di visualizzazione, cookie per la gestione dei contenuti multimediali.</li>
                    </ul>
                    <h3>4. Cookie di targeting e pubblicità</h3>
                    <p>Questi cookie vengono utilizzati per mostrarti annunci pubblicitari più rilevanti per i tuoi interessi. Possono anche limitare il numero di volte in cui vedi un annuncio e aiutarci a misurare l'efficacia delle nostre campagne promozionali.</p>

                    <ul>
                        <li>Esempi: Cookie di retargeting, cookie per la pubblicità comportamentale.</li>
                    </ul>

                    <h2>Come gestire i cookie?</h2>
                    <p>Puoi gestire le tue preferenze relative ai cookie direttamente dalle impostazioni del tuo browser. Tuttavia, ti ricordiamo che la disattivazione di alcuni cookie potrebbe influire sulle funzionalità del sito e sulla tua esperienza di navigazione.</p>

                    <p>Di seguito trovi alcune guide utili per gestire i cookie nei browser più comuni:</p>

                    <ul>
                        <li>Google Chrome</li>
                        <li>Mozilla Firefox</li>
                        <li>Microsoft Edge</li>
                        <li>Safari</li>
                    </ul>

                    <h2>Condivisione di dati con terze parti</h2>
                    <p>Alcuni cookie presenti sul nostro sito sono gestiti da terze parti, come fornitori di servizi di analisi o piattaforme pubblicitarie. Questi soggetti possono utilizzare i dati raccolti per migliorare i loro servizi o per personalizzare gli annunci che vedi online.</p>

                    <p>Per ulteriori informazioni sulle politiche di privacy di queste terze parti, ti invitiamo a consultare i loro siti ufficiali.</p>

                    <h2>Modifiche alla Cookie Policy</h2>
                    <p>Ci riserviamo il diritto di aggiornare questa Cookie Policy in qualsiasi momento. Eventuali modifiche saranno pubblicate su questa pagina, pertanto ti consigliamo di visitarla periodicamente per rimanere informato.</p>
                    <p>Ultimo aggiornamento: [DATA DI AGGIORNAMENTO]</p>

                    <p>Se hai domande o dubbi relativi alla nostra Cookie Policy, non esitare a contattarci all'indirizzo email [EMAIL] o tramite il modulo di contatto disponibile sul sito.</p>

                    <p>Grazie per aver visitato il sito di Soundwave !</p>
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
