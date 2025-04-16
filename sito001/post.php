<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titolo Articolo | SOUNDWAVE Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        .post-hero {
            background: linear-gradient(rgba(60,0,140,0.8),rgba(0,0,0,0.7)), url('img/blog_01.webp');
            background-size: cover;
            background-position: center;
            min-height: 400px;
            height:50vh;
            display: flex;
            align-items: center;
        }
        .post-category {
            display: inline-block;
            background: var(--color-primary-light2);
            color: var(--color-primary-dark);
            font-size: var(--font-size-sm);
            font-weight: bold;
            border-radius: var(--border-radius-sm);
            padding: 2px 16px 2px 10px;
            margin-bottom: var(--spacing-sm);
            margin-right: var(--spacing-sm);
            cursor: pointer;
            transition: background .2s, color .2s;
        }
        .post-category:hover {
            background: var(--color-primary);
            color: var(--color-white);
        }
        .post-title {
            font-size: var(--font-size-3xl);
            color: var(--color-white);
            font-weight: 900;
            margin-bottom: var(--spacing-sm);
        }
        .post-meta {
            color: var(--color-primary-light2);
            font-size: var(--font-size-sm);
            margin-bottom: var(--spacing-lg);
        }
        .post-main-content {
            background: var(--color-dark-2);
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            max-width: 900px;
            margin: -60px auto 0 auto;
            position: relative;
            z-index: 2;
            padding: var(--spacing-3xl) var(--spacing-2xl);
        }
        @media (max-width: 576px) {
            .post-main-content {padding: var(--spacing-xl) var(--spacing-md);}
            .post-title {font-size:var(--font-size-xl);}
        }
        .post-tags {
            display: flex; flex-wrap: wrap; gap: var(--spacing-xs); margin-bottom: var(--spacing-md);
        }
        .post-tag {
            background: var(--color-gray);
            color: var(--color-white);
            border-radius: var(--border-radius-sm);
            padding: 2px 10px;
            font-size: var(--font-size-sm);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="site-header">
        <div class="container header-container">
            <div class="logo"><a href="index.html" style="color:inherit;text-decoration:none;">SOUND<span>WAVE</span></a></div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="index.html#lineup" class="nav-link">Lineup</a></li>
                    <li><a href="index.html#merchandise" class="nav-link">Merchandise</a></li>
                    <li><a href="index.html#gallery" class="nav-link">Galleria</a></li>
                    <li><a href="index.html#artists" class="nav-link">Artisti</a></li>
                    <li><a href="blog.html" class="nav-link active">Blog</a></li>
                    <li><a href="biglietti.html" class="nav-link">Biglietti</a></li>
                    <li><a href="faq.html" class="nav-link">FAQ</a></li>
                </ul>
                <button class="mobile-menu-toggle"><i class="fas fa-bars"></i></button>
            </nav>
        </div>
    </header>
    <div class="mobile-menu">
        <button class="mobile-menu-close"><i class="fas fa-times"></i></button>
        <nav class="mobile-nav">
            <ul>
                <li class="mobile-nav-item"><a href="index.html" class="mobile-nav-link">Home</a></li>
                <li class="mobile-nav-item"><a href="index.html#lineup" class="mobile-nav-link">Lineup</a></li>
                <li class="mobile-nav-item"><a href="index.html#merchandise" class="mobile-nav-link">Merchandise</a></li>
                <li class="mobile-nav-item"><a href="index.html#gallery" class="mobile-nav-link">Galleria</a></li>
                <li class="mobile-nav-item"><a href="index.html#artists" class="mobile-nav-link">Artisti</a></li>
                <li class="mobile-nav-item"><a href="blog.html" class="mobile-nav-link active">Blog</a></li>
                <li class="mobile-nav-item"><a href="biglietti.html" class="mobile-nav-link">Biglietti</a></li>
                <li class="mobile-nav-item"><a href="faq.html" class="mobile-nav-link">FAQ</a></li>
            </ul>
        </nav>
    </div>
    <div class="overlay"></div>

    <!-- HERO ARTICOLO -->
    <section class="post-hero">
        <div class="container">
            <a href="blog.html?cat=guide" class="post-category">Guida</a>
            <h1 class="post-title">The Essential Guide To Your Soundwave Adventure</h1>
            <div class="post-meta">
                14 giugno 2025 · di <strong>Marta Ferri</strong>
            </div>
            <div class="post-tags">
                <span class="post-tag">planning</span>
                <span class="post-tag">survival</span>
                <span class="post-tag">2025</span>
            </div>
        </div>
    </section>

    <!-- --- CONTENITORE DEL POST--- -->
    <main class="post-main-content">
        <!-- Qui inserirai il contenuto completo del post -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis velit nunc. Phasellus quam augue, interdum ac fringilla ac, auctor vitae est. Phasellus lorem mauris, venenatis at auctor at, euismod a lectus. Donec bibendum quam vitae commodo maximus. Donec tempor rhoncus maximus. Etiam pulvinar aliquet justo nec aliquam. Vivamus dapibus a dolor quis fringilla. Praesent suscipit arcu egestas, tincidunt mi in, scelerisque risus. Nunc elit nunc, varius eget nunc sagittis, aliquam tristique sapien. Suspendisse non nibh pulvinar, bibendum leo sed, pulvinar mauris. Vestibulum scelerisque, enim a feugiat auctor, ante neque auctor nulla, sit amet semper elit nibh id enim.</p>
        <p>Pellentesque tempor vehicula nunc eget congue. Etiam eros lorem, consequat interdum sapien sed, porta ornare ante. Nam quis nunc elit. Ut rhoncus sem a vehicula ullamcorper. Duis eget diam felis. Nullam iaculis condimentum ante, in sollicitudin turpis cursus in. In fringilla nisl at mauris lacinia fringilla. In mi odio, mollis ut dui facilisis, lobortis tempor nisi. Duis efficitur sagittis nisi vitae ornare. Sed rhoncus ante sed vehicula tincidunt. Vivamus eget dui ac leo semper dictum non nec augue. Etiam rutrum, erat nec tristique eleifend, massa nulla pulvinar ex, vitae sodales enim turpis non dui. Nullam fringilla ac libero at iaculis.</p>
        <p>Curabitur nec laoreet libero. Curabitur id sapien id ipsum venenatis pellentesque. Maecenas magna urna, tincidunt ut sapien vitae, dictum faucibus risus. Proin lacinia massa velit, eu faucibus mauris semper sed. Donec pharetra porttitor ultricies. Cras tincidunt tempus ullamcorper. Nunc accumsan et turpis sed fringilla. Sed quis orci sit amet erat euismod egestas. Aliquam tincidunt blandit nisl sed vestibulum. Donec at varius lorem, sed fringilla tortor. Nunc nisi tortor, dictum a leo vel, egestas lacinia libero. Fusce tempus, leo quis imperdiet scelerisque, elit nibh varius eros, ac posuere nibh justo et elit. Etiam ornare mi sed ante elementum, sed fermentum augue pretium. Quisque ac felis suscipit, consectetur sapien et, volutpat risus.</p>
        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed in tincidunt tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum leo massa, gravida a mauris nec, vestibulum rhoncus massa. Suspendisse dapibus ornare sapien ut finibus. Pellentesque semper tortor ac ipsum molestie, ac porttitor arcu laoreet. Sed convallis, leo ac euismod interdum, quam sapien scelerisque justo, nec commodo sem mauris sed mi. Donec interdum dolor lacus, eu venenatis ex tincidunt eget. Aliquam maximus, mi in mollis egestas, urna dolor dictum tellus, ut volutpat magna risus vel risus. Suspendisse venenatis a neque at vehicula. Ut rhoncus interdum odio, vitae hendrerit nunc interdum eu. Curabitur nulla elit, fermentum sit amet mauris eu, volutpat dignissim libero. Cras in sagittis nunc, ac tempus nunc. Vivamus tristique ultrices facilisis. Curabitur dignissim ex hendrerit nibh tempus, et egestas nibh lobortis. Integer ornare tortor quis viverra mollis.</p>
        <p>Morbi tristique risus sed lacus imperdiet, quis vestibulum massa posuere. Etiam sagittis est sed massa cursus ultricies. Fusce eget sem ut magna gravida accumsan sed sed nisi. Nunc ipsum nibh, cursus sed mollis eget, laoreet eu libero. Cras a posuere augue. Etiam arcu ante, ultrices et tortor sed, convallis suscipit purus. Pellentesque pharetra maximus justo ac scelerisque. Etiam ac lacus sodales, finibus orci ac, efficitur justo. Cras tristique fringilla ex nec vulputate. Donec sed velit accumsan, euismod odio a, lobortis sapien.</p>
    </main>
    <!-- --- FINE CONTENITORE DEL POST --- -->

    <!-- CTA Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));margin-top:80px;">
        <div class="container">
            <h2 class="cta-title">Vuoi leggere altri articoli?</h2>
            <p class="cta-text">Visita la sezione <a href="blog.html" style="color:var(--color-secondary);">blog</a> o naviga tra le nostre ultime novità!</p>
            <div class="cta-buttons">
                <a href="blog.html" class="button btn-primary">Torna agli Articoli</a>
                <a href="index.html" class="button btn-secondary">Home</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-column">
                    <h4>SOUNDWAVE</h4>
                    <p>Il festival musicale più grande d'Italia, con artisti di fama mondiale e un'atmosfera unica che ti lascerà senza fiato.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h4>Link Utili</h4>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="index.html">Home</a></li>
                        <li class="footer-link"><a href="index.html#lineup">Lineup</a></li>
                        <li class="footer-link"><a href="index.html#merchandise">Merchandising</a></li>
                        <li class="footer-link"><a href="index.html#gallery">Galleria</a></li>
                        <li class="footer-link"><a href="blog.html">Blog</a></li>
                        <li class="footer-link"><a href="biglietti.html">Biglietti</a></li>
                        <li class="footer-link"><a href="faq.html">FAQ</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Informazioni</h4>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="faq.html">FAQ</a></li>
                        <li class="footer-link"><a href="#">Come Arrivare</a></li>
                        <li class="footer-link"><a href="#">Alloggi</a></li>
                        <li class="footer-link"><a href="#">Regolamento</a></li>
                        <li class="footer-link"><a href="biglietti.html">Biglietti</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>Contatti</h4>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="mailto:info@soundwave.it">info@soundwave.it</a></li>
                        <li class="footer-link"><a href="tel:+390123456789">+39 0123 456789</a></li>
                        <li class="footer-link">Via della Musica, 123<br>00100 Roma, Italia</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 SOUNDWAVE Festival. Tutti i diritti riservati. | Privacy Policy | Cookie Policy | Termini di Servizio</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = document.querySelector('.overlay');
            const mobileMenuClose = document.querySelector('.mobile-menu-close');
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.add('active');
                overlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
            function closeMenu() {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = '';
            }
            mobileMenuClose.addEventListener('click', closeMenu);
            overlay.addEventListener('click', closeMenu);
            // Fixed header on scroll
            const header = document.querySelector('.site-header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>
