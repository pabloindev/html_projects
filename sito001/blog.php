<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | SOUNDWAVE Festival</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        /* Blog Layout */
        .blog-main-section {padding: var(--spacing-3xl) 0;background:var(--color-dark);}
        .blog-filters {
            background: var(--color-dark-2);
            padding: var(--spacing-xl) var(--spacing-lg);
            border-radius:var(--border-radius-lg);
            max-width:900px; margin:0 auto var(--spacing-3xl);
            display: flex;
            flex-wrap:wrap;
            gap:var(--spacing-xl);
            align-items: flex-end;
        }
        .blog-filter-group {
            flex:1;
            min-width:180px;
        }
        .blog-filter-label {font-weight:600;}
        .blog-filter-input, .blog-filter-select {
            margin-top:var(--spacing-xs);
        }
        /* Highlighted last article */
        .blog-featured {
            display:flex;flex-wrap:wrap;
            gap:var(--spacing-2xl);
            background:var(--color-dark-2);
            border-radius:var(--border-radius-xl);
            box-shadow:var(--shadow-lg);
            margin-bottom:var(--spacing-3xl);
            align-items: stretch;
        }
        .blog-featured-cover {
            flex:1 1 350px; min-width:300px; max-width:480px;
            background-size: cover;
            background-position: center;
            border-radius:var(--border-radius-xl) 0 0 var(--border-radius-xl);
            transition:filter .2s;
            cursor:pointer;
        }
        .blog-featured-cover:hover {filter:brightness(.8);}
        .blog-featured-body {
            flex:2 1 390px; min-width:0;
            display:flex; flex-direction:column; justify-content:center;
            padding: var(--spacing-2xl) var(--spacing-xl);
        }
        .blog-category {
            width:fit-content;
            display:inline-block;
            background:var(--color-primary-light2);
            color:var(--color-primary-dark);
            font-size: var(--font-size-sm);
            font-weight:700;
            border-radius:var(--border-radius-sm);
            padding:2px 18px 2px 10px;
            margin-bottom:var(--spacing-sm);
            margin-right:var(--spacing-sm);
            transition:background .2s,color .2s;
            position:relative;
            cursor:pointer;
        }
        .blog-category:hover, .blog-category:focus {
            background:var(--color-primary);
            color:var(--color-white);
        }
        .blog-category:after {
            content: '\f002';
            font-family: "Font Awesome 6 Free"; /* search icon */
            font-weight: 900;
            font-size: .9em;
            margin-left:7px;
        }
        .blog-title {
            font-size: var(--font-size-2xl);
            color:var(--color-white);
            font-weight:900;
            margin-bottom:var(--spacing-sm);
            transition:color .2s;
            cursor:pointer;
        }
        .blog-title:hover {color:var(--color-primary);}
        .blog-meta {
            color:var(--color-primary-light2);
            font-size:var(--font-size-sm);
            margin-bottom:var(--spacing-md);
        }
        .blog-featured .blog-meta {font-size:var(--font-size-md);}
        .blog-summary {
            color:var(--color-light-gray);
            margin-bottom:var(--spacing-md);
            font-size:var(--font-size-lg);
        }
        .blog-tags {
            display:flex; flex-wrap:wrap; gap:var(--spacing-xs);
        }
        .blog-tag {
            background:var(--color-gray);
            color:var(--color-white);
            border-radius:var(--border-radius-sm);
            padding:2px 10px;
            font-size:var(--font-size-sm);
        }

        /* Old style single articles */
        .blog-article-list {max-width:900px; margin:0 auto;}
        .blog-article {
            display:flex;gap:var(--spacing-lg);
            background:var(--color-dark-2);
            border-radius:var(--border-radius-lg);
            box-shadow:var(--shadow-md);
            margin-bottom:var(--spacing-2xl);
            align-items:stretch;
        }
        .blog-article-cover {
            width:160px; min-width:110px; background-size:cover;
            background-position:center;
            border-radius:var(--border-radius-lg) 0 0 var(--border-radius-lg);
            transition:filter .2s;
            cursor:pointer;
        }
        .blog-article-cover:hover {filter:brightness(.8);}
        .blog-article-body {
            padding: var(--spacing-lg) var(--spacing-lg) var(--spacing-lg) 0;
            flex:1;
            display:flex; flex-direction:column; justify-content:center;
            min-width: 0;
        }
        .blog-article .blog-title {
            font-size: var(--font-size-lg);
            margin-bottom:var(--spacing-xs);
        }
        .blog-article .blog-title:hover {color:var(--color-primary);}
        .blog-article .blog-summary {
            font-size:var(--font-size-base);
        }
        /* Paginazione */
        .pagination {
            display:flex;gap:var(--spacing-sm);justify-content:center;margin-top:var(--spacing-lg);
        }
        .pagination-btn {
            background:transparent;
            border:none;
            color:var(--color-white);
            font-weight:700;
            padding:8px 14px;
            border-radius:var(--border-radius-md);
            font-size:var(--font-size-base);
            transition:background .2s,color .2s;
            cursor:pointer;
        }
        .pagination-btn.active, .pagination-btn:hover {
            background:var(--color-primary-light2);
            color:var(--color-primary-dark);
        }
        @media(max-width:900px){
            .blog-featured{flex-direction:column;}
            .blog-featured-cover{border-radius:var(--border-radius-xl) var(--border-radius-xl) 0 0;max-width:100%;}
        }
        @media(max-width:576px){
            .blog-featured-body{padding:var(--spacing-lg);}
            .blog-filters{padding:var(--spacing-lg) var(--spacing-md);}
            .blog-article{flex-direction:column;}
            .blog-article-cover{width:100vw;max-width:100%;height:180px;border-radius:var(--border-radius-lg) var(--border-radius-lg) 0 0;}
        }
    </style>
</head>
<body>
    
    <?php include '_header.php'; ?>
    <div class="overlay"></div>

    <!-- HERO -->
    <section class="hero" style="background-image: linear-gradient(rgba(60,0,140,0.8),rgba(0,0,0,0.7)), url('img/img26.webp'); min-height:400px; height:50vh;">
        <div class="container" style="margin-top:100px;">
            <div class="hero-content">
                <h1 class="hero-title" style="font-size:clamp(2rem,5vw,3rem);">BLOG</h1>
                <p class="hero-description">Scopri novità, interviste, curiosità e lifestyle dal mondo SOUNDWAVE!</p>
            </div>
        </div>
    </section>

    <!-- FILTRI -->
    <section class="blog-main-section">
        <div class="container">
            <form class="blog-filters" action="#" method="get">
                <div class="blog-filter-group">
                    <label class="blog-filter-label" for="searchTitle">Cerca titolo</label>
                    <input id="searchTitle" name="q" type="text" placeholder="Cerca per titolo..." class="blog-filter-input" style="width:100%;">
                </div>
                <div class="blog-filter-group">
                    <label class="blog-filter-label" for="searchCat">Categoria</label>
                    <select id="searchCat" name="cat" class="blog-filter-select" style="width:100%;">
                        <option value="">Tutte le categorie</option>
                        <option value="news">News</option>
                        <option value="interview">Intervista</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="guide">Guida</option>
                    </select>
                </div>
                <div class="blog-filter-group" style="flex-basis:120px;text-align:right;">
                    <button class="button btn-primary" style="width:100%;" type="submit">
                        <i class="fas fa-search"></i> Cerca
                    </button>
                </div>
            </form>
        </div>

        <!-- ARTICOLI IN EVIDENZA -->
        <div class="container">
            <div class="blog-featured">
                <div class="blog-featured-cover"
                    style="background-image:url('img/blog_01.webp');"
                    onclick="window.location.href='post.html';"
                    title="Leggi l'articolo"></div>
                <div class="blog-featured-body">
                    <a href="blog.html?cat=guide" class="blog-category">Guida</a>
                    <a href="post.html" class="blog-title">The Essential Guide To Your Soundwave Adventure</a>
                    <div class="blog-meta">
                        <span>14 giugno 2025</span> · di <b>Marta Ferri</b>
                    </div>
                    <p class="blog-summary">Plan your festival days with tips and tricks for a memorable Soundwave experience.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">planning</span>
                        <span class="blog-tag">survival</span>
                        <span class="blog-tag">2025</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ARTICOLI LISTA SOTTO -->
        <div class="blog-article-list container">
            <!-- ARTICOLO 2 -->
            <div class="blog-article">
                <div class="blog-article-cover"
                     style="background-image:url('img/blog_02.webp');"
                     onclick="window.location.href='articolo.html?id=2';"
                     title="Leggi l'articolo"></div>
                <div class="blog-article-body">
                    <a href="blog.html?cat=news" class="blog-category">News</a>
                    <a href="articolo.html?id=2" class="blog-title">Apertura Extra: Nuovo Stage Svelato!</a>
                    <div class="blog-meta">
                        <span>10 giugno 2025</span> · di <b>Mario Rossi</b>
                    </div>
                    <p class="blog-summary">Un nuovo palco per Soundwave! Scopri cosa ti aspetta nella line-up di quest'anno.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">stage</span>
                        <span class="blog-tag">update</span>
                    </div>
                </div>
            </div>
            <!-- ARTICOLO 3 -->
            <div class="blog-article">
                <div class="blog-article-cover"
                     style="background-image:url('img/blog_03.webp');"
                     onclick="window.location.href='articolo.html?id=3';"
                     title="Leggi l'articolo"></div>
                <div class="blog-article-body">
                    <a href="blog.html?cat=interview" class="blog-category">Intervista</a>
                    <a href="articolo.html?id=3" class="blog-title">Incontro con la star: intervista ad Aurora</a>
                    <div class="blog-meta">
                        <span>5 giugno 2025</span> · di <b>Fabio Greco</b>
                    </div>
                    <p class="blog-summary">L'artista si racconta tra ispirazioni, sogni e l'emozione di esibirsi a Soundwave.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">aurora</span>
                        <span class="blog-tag">artist</span>
                    </div>
                </div>
            </div>
            <!-- ARTICOLO 4 -->
            <div class="blog-article">
                <div class="blog-article-cover"
                    style="background-image:url('img/blog_04.webp');"
                    onclick="window.location.href='articolo.html?id=4';"
                    title="Leggi l'articolo"></div>
                <div class="blog-article-body">
                    <a href="blog.html?cat=lifestyle" class="blog-category">Lifestyle</a>
                    <a href="articolo.html?id=4" class="blog-title">Outfit perfetto per il festival: consigli di stile</a>
                    <div class="blog-meta">
                        <span>28 maggio 2025</span> · di <b>Giulia Corsi</b>
                    </div>
                    <p class="blog-summary">Basta poco per vivere il festival con stile e comodità, parola di fashion blogger.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">fashion</span>
                        <span class="blog-tag">2025</span>
                    </div>
                </div>
            </div>
            <!-- ARTICOLO 5 -->
            <div class="blog-article">
                <div class="blog-article-cover"
                    style="background-image:url('img/blog_05.webp');"
                    onclick="window.location.href='articolo.html?id=5';"
                    title="Leggi l'articolo"></div>
                <div class="blog-article-body">
                    <a href="blog.html?cat=interview" class="blog-category">Intervista</a>
                    <a href="articolo.html?id=5" class="blog-title">Dietro le quinte: il tecnico del suono</a>
                    <div class="blog-meta">
                        <span>22 maggio 2025</span> · di <b>Luca Berni</b>
                    </div>
                    <p class="blog-summary">Come si realizza il sound perfetto? Lo sveliamo con chi lavora nel backstage.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">tecnico</span>
                        <span class="blog-tag">backstage</span>
                    </div>
                </div>
            </div>
            <!-- ARTICOLO 6 -->
            <div class="blog-article">
                <div class="blog-article-cover"
                    style="background-image:url('img/blog_06.webp');"
                    onclick="window.location.href='articolo.html?id=6';"
                    title="Leggi l'articolo"></div>
                <div class="blog-article-body">
                    <a href="blog.html?cat=news" class="blog-category">News</a>
                    <a href="articolo.html?id=6" class="blog-title">Raggiungi Soundwave: navette e trasporti</a>
                    <div class="blog-meta">
                        <span>18 maggio 2025</span> · di <b>Elena Visconti</b>
                    </div>
                    <p class="blog-summary">Scopri tutti i servizi per arrivare comodamente e in sicurezza al festival.</p>
                    <div class="blog-tags">
                        <span class="blog-tag">trasporti</span>
                        <span class="blog-tag">info</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGINATION -->
        <div class="pagination">
            <button class="pagination-btn" disabled><i class="fas fa-chevron-left"></i></button>
            <button class="pagination-btn active">1</button>
            <button class="pagination-btn">2</button>
            <button class="pagination-btn">3</button>
            <button class="pagination-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section" style="background-image: linear-gradient(rgba(60, 0, 140, 0.8), rgba(60, 0, 140, 0.8));">
        <div class="container">
            <h2 class="cta-title">Vuoi scrivere o segnalarci una storia?</h2>
            <p class="cta-text">Contattaci via mail a <a href="mailto:blog@soundwave.it" style="color:var(--color-secondary);">blog@soundwave.it</a></p>
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
