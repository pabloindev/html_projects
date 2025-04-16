<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUNDWAVE - Il Festival Musicale Definitivo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '_header.php'; ?>

    <div class="overlay"></div>

    <!-- Hero Section -->
    <section class="hero" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/img1.webp');">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">VIVI L'ESPERIENZA <br>DEL FESTIVAL MUSICALE DEFINITIVO</h1>
                <p class="hero-description">Preparati a vivere 3 giorni di pura energia musicale con oltre 50 artisti da tutto il mondo. Un'esperienza indimenticabile che ti lascerà senza fiato.</p>
                <div class="hero-actions">
                    <a href="#" class="button btn-primary">Acquista Biglietti</a>
                    <a href="#lineup" class="button btn-secondary">Scopri Lineup</a>
                </div>
            </div>
            <div class="hero-image">
                <!-- <img src="img2.jpg" alt="Cantante sul palco"> -->
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Artisti</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3+</div>
                    <div class="stat-label">Giorni</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Palchi</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20k+</div>
                    <div class="stat-label">Partecipanti</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lineup Section -->
    <section id="lineup" class="lineup-section">
        <div class="container">
            <h2 class="section-title">LINEUP PER ELETTRIZZANTI ESPERIENZE MUSICALI DAL VIVO</h2>
            
            <div class="event-day">
                <div class="day-header">
                    <div class="day-number">01</div>
                    <div class="day-info">
                        <h3>Venerdì, 10 Giugno</h3>
                        <p>Orario: 16:00 - 01:00</p>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-image" style="background-image: url('img/img3.webp');"></div>
                    <div class="event-details">
                        <div class="event-time">20:00 - 22:00 | Palco Principale</div>
                        <h4 class="event-title">The Electric Sound - Tour Mondiale</h4>
                        <p class="event-description">Gli Electric Sound portano la loro elettrizzante energia sul palco principale con il loro ultimo tour mondiale. Preparati a saltare e ballare con i loro ritmi coinvolgenti e testi motivazionali.</p>
                        <a href="#" class="button btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-image" style="background-image: url('img/img4.webp');"></div>
                    <div class="event-details">
                        <div class="event-time">18:00 - 19:30 | Palco Rock</div>
                        <h4 class="event-title">Melodic Metal Masters</h4>
                        <p class="event-description">I maestri del metal melodico celebrano il 10° anniversario del loro album di successo "Eternal Flames". Un'esibizione imperdibile per tutti gli amanti del genere.</p>
                        <a href="#" class="button btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
            </div>
            
            <div class="event-day">
                <div class="day-header">
                    <div class="day-number">02</div>
                    <div class="day-info">
                        <h3>Sabato, 11 Giugno</h3>
                        <p>Orario: 14:00 - 02:00</p>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-image" style="background-image: url('img/img5.webp');"></div>
                    <div class="event-details">
                        <div class="event-time">21:00 - 23:30 | Palco Principale</div>
                        <h4 class="event-title">Rhythm Collective Live Experience</h4>
                        <p class="event-description">Il collettivo più famoso del momento porta sul palco uno spettacolo unico che fonde musica elettronica, visual art e performance dal vivo. Un'esperienza sensoriale completa.</p>
                        <a href="#" class="button btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
                
                <div class="event-card">
                    <div class="event-image" style="background-image: url('img/img6.webp');"></div>
                    <div class="event-details">
                        <div class="event-time">19:00 - 20:30 | Palco Urban</div>
                        <h4 class="event-title">Urban Beats Showcase</h4>
                        <p class="event-description">I migliori talenti della scena hip-hop e R&B si uniscono per una serata dedicata alla cultura urbana. Flow impeccabili, beat potenti e ospiti a sorpresa.</p>
                        <a href="#" class="button btn-primary btn-sm">Dettagli</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Merchandise Section -->
    <section id="merchandise" class="merchandise-section">
        <div class="container">
            <h2 class="section-title">MERCHANDISING ESCLUSIVO PER VERI MUSICISTI</h2>
            
            <div class="merchandise-tabs">
                <button class="tab-button active">T-Shirt</button>
                <button class="tab-button">Accessori</button>
                <button class="tab-button">Vinili</button>
                <button class="tab-button">Poster</button>
                <button class="tab-button">Edizioni Limitate</button>
            </div>
            
            <div class="merchandise-grid">
                <div class="merchandise-item">
                    <div class="merchandise-image" style="background-image: url('img/img7.webp');"></div>
                    <div class="merchandise-info">
                        <h4 class="merchandise-name">T-Shirt Festival Tour</h4>
                        <div class="merchandise-price">€39.99</div>
                        <a href="#" class="button btn-primary btn-sm">Acquista</a>
                    </div>
                </div>
                
                <div class="merchandise-item">
                    <div class="merchandise-image" style="background-image: url('img/img8.webp');"></div>
                    <div class="merchandise-info">
                        <h4 class="merchandise-name">Collana Limited Edition</h4>
                        <div class="merchandise-price">€29.99</div>
                        <a href="#" class="button btn-primary btn-sm">Acquista</a>
                    </div>
                </div>
                
                <div class="merchandise-item">
                    <div class="merchandise-image" style="background-image: url('img/img9.webp');"></div>
                    <div class="merchandise-info">
                        <h4 class="merchandise-name">Vinile Compilation Festival</h4>
                        <div class="merchandise-price">€49.99</div>
                        <a href="#" class="button btn-primary btn-sm">Acquista</a>
                    </div>
                </div>
                
                <div class="merchandise-item">
                    <div class="merchandise-image" style="background-image: url('img/img10.webp');"></div>
                    <div class="merchandise-info">
                        <h4 class="merchandise-name">Poster Autografato Artisti</h4>
                        <div class="merchandise-price">€19.99</div>
                        <a href="#" class="button btn-primary btn-sm">Acquista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <h2 class="section-title">CATTURA I MOMENTI INDIMENTICABILI SUL PALCO</h2>
            
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="img/img11.webp" alt="Concerto Live">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/img12.webp" alt="DJ Performance">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/img13.webp" alt="Band sul palco">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/img14.webp" alt="Pubblico entusiasta">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/img15.webp" alt="Performance solista">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="img/img16.webp" alt="Light show">
                    <div class="gallery-overlay">
                        <a href="#" class="button btn-primary btn-sm">Visualizza</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artists Section -->
    <section id="artists" class="artists-section">
        <div class="container">
            <h2 class="section-title">INCONTRA LE LEGGENDE MUSICALI</h2>
            
            <div class="artists-grid">
                <div class="artist-card">
                    <div class="artist-image" style="background-image: url('img/img17.webp');"></div>
                    <div class="artist-info">
                        <h3 class="artist-name">Lia Rossi</h3>
                        <div class="artist-role">Cantante Pop</div>
                        <div class="artist-social">
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-spotify"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="artist-card">
                    <div class="artist-image" style="background-image: url('img/img18.webp');"></div>
                    <div class="artist-info">
                        <h3 class="artist-name">Marco Costa</h3>
                        <div class="artist-role">DJ & Produttore</div>
                        <div class="artist-social">
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-spotify"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="artist-card">
                    <div class="artist-image" style="background-image: url('img/img19.webp');"></div>
                    <div class="artist-info">
                        <h3 class="artist-name">Luna Neri</h3>
                        <div class="artist-role">Cantautrice</div>
                        <div class="artist-social">
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-spotify"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="container">
            <h2 class="section-title" style="color: var(--color-dark);">GRAZIE AI NOSTRI SPONSOR</h2>
            
            <div class="sponsors-grid">
                <div class="sponsor-item">
                    <img src="img/logo1_black.webp" alt="Logo Sponsor 1">
                </div>
                <div class="sponsor-item">
                    <img src="img/logo2_black.webp" alt="Logo Sponsor 2">
                </div>
                <div class="sponsor-item">
                    <img src="img/logo3_black.webp" alt="Logo Sponsor 3">
                </div>
                <div class="sponsor-item">
                    <img src="img/logo4_black.webp" alt="Logo Sponsor 4">
                </div>
                <div class="sponsor-item">
                    <img src="img/logo5_black.webp" alt="Logo Sponsor 5">
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <img src="img/img25.webp" alt="Mappa mondiale" class="world-map">
        <div class="container">
            <div class="ticket-counter">
                <h3 class="countdown-title">MANCANO SOLO</h3>
                <div class="countdown-timer">
                    <div class="countdown-item">
                        <div class="countdown-number">45</div>
                        <div class="countdown-label">Giorni</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">12</div>
                        <div class="countdown-label">Ore</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">30</div>
                        <div class="countdown-label">Minuti</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number">15</div>
                        <div class="countdown-label">Secondi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <h2 class="section-title">ESPLORA LE ULTIME TENDENZE</h2>
            
            <div class="blog-grid">
                <div class="blog-card">
                    <div class="blog-image" style="background-image: url('img/img26.webp');"></div>
                    <div class="blog-content">
                        <div class="blog-date">12 Maggio 2025</div>
                        <h3 class="blog-title">Il Futuro della Musica Live Post-Pandemia</h3>
                        <p class="blog-excerpt">Scopri come la scena musicale dal vivo si è evoluta dopo la pandemia e quali tendenze stanno plasmando il futuro dei concerti e festival.</p>
                        <a href="#" class="button btn-primary btn-sm">Leggi di più</a>
                    </div>
                </div>
                
                <div class="blog-card">
                    <div class="blog-image" style="background-image: url('img/img27.webp');"></div>
                    <div class="blog-content">
                        <div class="blog-date">28 Aprile 2025</div>
                        <h3 class="blog-title">Come Prepararsi per il Tuo Primo Festival Musicale</h3>
                        <p class="blog-excerpt">Guida completa per i principianti: cosa portare, come pianificare la tua esperienza e consigli per godere al massimo di ogni momento.</p>
                        <a href="#" class="button btn-primary btn-sm">Leggi di più</a>
                    </div>
                </div>
                
                <div class="blog-card">
                    <div class="blog-image" style="background-image: url('img/img28.webp');"></div>
                    <div class="blog-content">
                        <div class="blog-date">10 Aprile 2025</div>
                        <h3 class="blog-title">Gli Artisti Emergenti da Non Perdere Quest'Anno</h3>
                        <p class="blog-excerpt">Abbiamo selezionato i talenti più promettenti che stanno rivoluzionando la scena musicale e che si esibiranno al nostro festival.</p>
                        <a href="#" class="button btn-primary btn-sm">Leggi di più</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));">
        <div class="container">
            <h2 class="cta-title">NON PERDERTI QUESTA ESPERIENZA UNICA!</h2>
            <p class="cta-text">Unisciti a migliaia di appassionati di musica per un'esperienza indimenticabile. Acquista ora il tuo biglietto e preparati al meglio festival dell'anno.</p>
            <div class="cta-buttons">
                <a href="#" class="button btn-secondary">Acquista Biglietti</a>
                <a href="#lineup" class="button btn-primary">Scopri gli Artisti</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Mobile Menu Toggle JS -->
    <script src="script.js"></script>
</body>
</html>