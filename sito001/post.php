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
    
    <?php include '_header.php'; ?>
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

    <?php include '_footer.php'; ?>

    <!-- Mobile Menu Toggle JS -->
    <script src="script.js"></script>
</body>
</html>
