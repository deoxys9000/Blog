<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yurinating.fun</title>
    <style>
        /* ----- reset & base ----- */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --orange: #f15a24;
            --orange-soft: #f4743f;
            --orange-glow: rgba(241, 90, 36, 0.25);
            --black: #0d0d0d;
            --black-soft: #1a1a1a;
            --grey-dark: #2b2b2b;
            --grey-mid: #5c5c5c;
            --grey-light: #9e9e9e;
            --grey-ghost: #c4c4c4;
            --white-soft: #e8e8e8;
            --white: #f5f5f5;
            --radius: 10px;
            --radius-sm: 6px;
            --transition: 0.25s ease;
            --font-sans: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            --font-serif: 'Lora', 'Georgia', 'Times New Roman', serif;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--black);
            color: var(--white-soft);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            letter-spacing: 0.01em;
        }

        /* ----- typography ----- */
        h1,
        h2,
        h3,
        h4 {
            font-weight: 600;
            line-height: 1.25;
            color: var(--white);
        }
        h1 {
            font-size: clamp(2.4rem, 5vw, 3.6rem);
            letter-spacing: -0.03em;
        }
        h2 {
            font-size: clamp(1.5rem, 3vw, 2rem);
            letter-spacing: -0.02em;
        }
        h3 {
            font-size: 1.2rem;
            letter-spacing: -0.01em;
        }
        p {
            color: var(--grey-light);
            font-size: 0.95rem;
        }
        a {
            color: inherit;
            text-decoration: none;
            transition: color var(--transition);
        }
        a:hover {
            color: var(--orange);
        }

        /* ----- layout ----- */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.8rem;
        }

        /* ----- navbar ----- */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.2rem 0;
            border-bottom: 1px solid var(--grey-dark);
            position: sticky;
            top: 0;
            background-color: rgba(13, 13, 13, 0.85);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            z-index: 100;
        }
        .logo {
            font-weight: 700;
            font-size: 1.35rem;
            letter-spacing: -0.02em;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }
        .logo-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--orange);
            display: inline-block;
            box-shadow: 0 0 10px var(--orange-glow);
        }
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            font-size: 0.9rem;
            font-weight: 500;
            letter-spacing: 0.02em;
            text-transform: uppercase;
            color: var(--grey-mid);
        }
        .nav-links li a.active {
            color: var(--orange);
        }
        .nav-links li a {
            position: relative;
            padding-bottom: 4px;
        }
        .nav-links li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 0;
            height: 2px;
            background: var(--orange);
            transition: width var(--transition);
        }
        .nav-links li a:hover::after,
        .nav-links li a.active::after {
            width: 100%;
        }
        .nav-cta {
            background: var(--orange);
            color: #fff;
            padding: 0.5rem 1.3rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.03em;
            transition: background var(--transition), box-shadow var(--transition);
            border: none;
            cursor: pointer;
        }
        .nav-cta:hover {
            background: var(--orange-soft);
            box-shadow: 0 0 18px var(--orange-glow);
            color: #fff;
        }

        /* ----- hero ----- */
        .hero {
            padding: 4.5rem 0 3rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            border-bottom: 1px solid var(--grey-dark);
        }
        .hero-text h1 {
            margin-bottom: 1rem;
        }
        .hero-text .highlight {
            color: var(--orange);
        }
        .hero-text .subtitle {
            font-family: var(--font-serif);
            font-size: 1.15rem;
            color: var(--grey-ghost);
            margin-bottom: 1.8rem;
            font-style: italic;
            line-height: 1.5;
        }
        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.7rem 1.6rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 0.02em;
            transition: all var(--transition);
            cursor: pointer;
            border: 1px solid transparent;
        }
        .btn-primary {
            background: var(--orange);
            color: #fff;
            border-color: var(--orange);
        }
        .btn-primary:hover {
            background: transparent;
            border-color: var(--orange);
            color: var(--orange);
            box-shadow: 0 0 22px var(--orange-glow);
        }
        .btn-ghost {
            background: transparent;
            border-color: var(--grey-mid);
            color: var(--grey-ghost);
        }
        .btn-ghost:hover {
            border-color: var(--orange);
            color: var(--orange);
        }
        .hero-visual {
            background: var(--black-soft);
            border: 1px solid var(--grey-dark);
            border-radius: var(--radius);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
        }
        .visual-card {
            display: flex;
            align-items: center;
            gap: 1rem;
            background: var(--grey-dark);
            border-radius: var(--radius-sm);
            padding: 0.9rem 1.2rem;
            transition: background var(--transition), transform var(--transition);
        }
        .visual-card:hover {
            background: #383838;
            transform: translateX(6px);
        }
        .visual-card .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--orange);
            flex-shrink: 0;
        }
        .visual-card span {
            color: var(--grey-light);
            font-size: 0.9rem;
        }

        /* ----- section headings ----- */
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin: 3.5rem 0 1.8rem;
        }
        .section-header h2 {
            position: relative;
        }
        .section-header h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 50px;
            height: 3px;
            background: var(--orange);
            border-radius: 3px;
        }
        .section-link {
            font-size: 0.85rem;
            font-weight: 500;
            color: var(--orange);
            letter-spacing: 0.03em;
            text-transform: uppercase;
        }
        .section-link:hover {
            color: var(--orange-soft);
        }

        /* ----- blog grid ----- */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.8rem;
            margin-bottom: 2rem;
        }
        .blog-card {
            background: var(--black-soft);
            border: 1px solid var(--grey-dark);
            border-radius: var(--radius);
            overflow: hidden;
            transition: border-color var(--transition), box-shadow var(--transition), transform var(--transition);
            display: flex;
            flex-direction: column;
        }
        .blog-card:hover {
            border-color: var(--orange);
            box-shadow: 0 12px 30px rgba(241, 90, 36, 0.08);
            transform: translateY(-4px);
        }
        .blog-card-image {
            height: 180px;
            background: var(--grey-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--grey-mid);
            font-size: 2.2rem;
            position: relative;
            overflow: hidden;
        }
        .blog-card-image .accent-stripe {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--orange);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }
        .blog-card:hover .accent-stripe {
            transform: scaleX(1);
        }
        .blog-card-body {
            padding: 1.4rem 1.3rem 1.3rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-card-body .meta {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--orange);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        .blog-card-body h3 {
            margin-bottom: 0.5rem;
            font-size: 1.15rem;
        }
        .blog-card-body p {
            font-size: 0.85rem;
            flex: 1;
            margin-bottom: 1rem;
            color: var(--grey-mid);
        }
        .read-more {
            font-weight: 600;
            font-size: 0.85rem;
            color: var(--orange);
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            transition: gap var(--transition);
        }
        .read-more:hover {
            gap: 0.6rem;
            color: var(--orange-soft);
        }

        /* ----- about + newsletter row ----- */
        .info-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin: 3rem 0 4rem;
        }
        .about-card,
        .newsletter-card {
            background: var(--black-soft);
            border: 1px solid var(--grey-dark);
            border-radius: var(--radius);
            padding: 2rem;
        }
        .about-card h3,
        .newsletter-card h3 {
            margin-bottom: 0.8rem;
        }
        .about-card p {
            color: var(--grey-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .about-card .signature {
            font-family: var(--font-serif);
            font-style: italic;
            color: var(--orange);
            font-size: 1.1rem;
        }
        .newsletter-form {
            display: flex;
            gap: 0.5rem;
            margin-top: 1.2rem;
            flex-wrap: wrap;
        }
        .newsletter-form input {
            flex: 1;
            min-width: 180px;
            padding: 0.7rem 1rem;
            border-radius: 50px;
            border: 1px solid var(--grey-mid);
            background: var(--grey-dark);
            color: var(--white);
            font-family: var(--font-sans);
            font-size: 0.9rem;
            outline: none;
            transition: border-color var(--transition);
        }
        .newsletter-form input:focus {
            border-color: var(--orange);
        }
        .newsletter-form button {
            background: var(--orange);
            color: #fff;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background var(--transition), box-shadow var(--transition);
            white-space: nowrap;
        }
        .newsletter-form button:hover {
            background: var(--orange-soft);
            box-shadow: 0 0 18px var(--orange-glow);
        }

        /* ----- footer ----- */
        .footer {
            border-top: 1px solid var(--grey-dark);
            padding: 2.5rem 0 2rem;
            margin-top: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 1.5rem;
            font-size: 0.85rem;
            color: var(--grey-mid);
        }
        .footer-links {
            display: flex;
            gap: 1.8rem;
            list-style: none;
        }
        .footer-links a {
            color: var(--grey-mid);
        }
        .footer-links a:hover {
            color: var(--orange);
        }
        .footer-copy {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .footer-copy .heart {
            color: var(--orange);
        }

        /* ----- mobile nav toggle ----- */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            flex-direction: column;
            gap: 5px;
            padding: 4px;
            z-index: 101;
        }
        .mobile-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--white);
            border-radius: 2px;
            transition: all var(--transition);
        }

        /* ----- responsive ----- */
        @media (max-width: 768px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 2rem;
                padding: 2.5rem 0 2rem;
            }
            .hero-visual {
                order: -1;
            }
            .info-row {
                grid-template-columns: 1fr;
            }
            .nav-links {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: var(--black-soft);
                flex-direction: column;
                gap: 0;
                padding: 1rem 0;
                border-bottom: 1px solid var(--grey-dark);
            }
            .nav-links.open {
                display: flex;
            }
            .nav-links li {
                padding: 0.7rem 1.8rem;
            }
            .mobile-toggle {
                display: flex;
            }
            .nav-cta.desktop-only {
                display: none;
            }
            .blog-grid {
                grid-template-columns: 1fr;
            }
        }
        @media (min-width: 769px) {
            .nav-cta.mobile-only {
                display: none;
            }
        }
    </style>
    <!-- Google Fonts for a refined look -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&family=Lora:ital,wght@0,500;1,500&display=swap" rel="stylesheet">
    <link rel="icon" href="favicon.png">
</head>
<body>
    <!-- NAVIGATION -->
    <header class="container">
        <nav class="navbar">
            <a href="#" class="logo">
                <span class="logo-dot"></span> thoughtseed
            </a>
            <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Articles</a></li>
                <li><a href="#">Notes</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#" class="nav-cta mobile-only">Subscribe</a></li>
            </ul>
            <a href="#" class="nav-cta desktop-only">Subscribe</a>
        </nav>
    </header>

    <!-- MAIN CONTENT -->
    <main class="container">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-text">
                <h1>Ideas that <span class="highlight">linger</span> past the scroll.</h1>
                <p class="subtitle">
                    A quiet corner of the internet where thoughts unfold — raw, honest, and intentionally slow.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn btn-primary">📖 Read the blog</a>
                    <a href="#" class="btn btn-ghost">✨ Start here</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="visual-card">
                    <span class="dot"></span>
                    <span>Designing with restraint</span>
                </div>
                <div class="visual-card">
                    <span class="dot"></span>
                    <span>The beauty of less</span>
                </div>
                <div class="visual-card">
                    <span class="dot"></span>
                    <span>Finding focus in chaos</span>
                </div>
                <div class="visual-card">
                    <span class="dot"></span>
                    <span>Writing as thinking</span>
                </div>
            </div>
        </section>

        <!-- Recent Posts -->
        <div class="section-header">
            <h2>Recent writing</h2>
            <a href="#" class="section-link">All posts →</a>
        </div>
        <section class="blog-grid">
            <article class="blog-card">
                <div class="blog-card-image">
                    <span>🟠</span>
                    <div class="accent-stripe"></div>
                </div>
                <div class="blog-card-body">
                    <span class="meta">Design · 8 min read</span>
                    <h3>Why orange is the most underrated color in UI</h3>
                    <p>Exploring warmth, attention, and the delicate balance of using bold hues in minimal interfaces.</p>
                    <a href="#" class="read-more">Read more <span>→</span></a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-card-image">
                    <span>⬛</span>
                    <div class="accent-stripe"></div>
                </div>
                <div class="blog-card-body">
                    <span class="meta">Mindset · 6 min read</span>
                    <h3>Embracing the grey areas of creative work</h3>
                    <p>Certainty is comforting, but the real magic lives in the in-between — where ideas are still malleable.</p>
                    <a href="#" class="read-more">Read more <span>→</span></a>
                </div>
            </article>

            <article class="blog-card">
                <div class="blog-card-image">
                    <span>📝</span>
                    <div class="accent-stripe"></div>
                </div>
                <div class="blog-card-body">
                    <span class="meta">Process · 5 min read</span>
                    <h3>How I rebuilt my writing habit from scratch</h3>
                    <p>No streaks, no guilt. Just a simple system that respects the ebb and flow of creative energy.</p>
                    <a href="#" class="read-more">Read more <span>→</span></a>
                </div>
            </article>
        </section>

        <!-- About + Newsletter Row -->
        <div class="info-row">
            <div class="about-card">
                <h3>👋 Hey, I'm Alex.</h3>
                <p>
                    I write about design, slow living, and the craft of building meaningful digital spaces.
                    This blog is my garden — a place where ideas grow at their own pace.
                </p>
                <p>
                    No hot takes. No algorithm-chasing. Just thoughts that deserve more than a tweet.
                </p>
                <span class="signature">— Alex</span>
            </div>
            <div class="newsletter-card">
                <h3>📬 Stay in the loop</h3>
                <p style="color: #9e9e9e; font-size: 0.9rem;">
                    A monthly letter with my latest essays, recommended reads, and quiet reflections. No spam, ever.
                </p>
                <form class="newsletter-form" onsubmit="handleSubscribe(event)">
                    <input type="email" placeholder="your@email.com" required aria-label="Email address">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="container footer">
        <div class="footer-copy">
            <span>© 2026 thoughtseed</span>
            <span>·</span>
            <span>Made with <span class="heart">♥</span> in quiet hours</span>
        </div>
        <ul class="footer-links">
            <li><a href="#">Essays</a></li>
            <li><a href="#">Notes</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">RSS</a></li>
        </ul>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navLinks = document.getElementById('navLinks');

        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });

        // Close mobile menu when a link is clicked
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('open');
            });
        });

        // Newsletter subscription handler (demo)
        function handleSubscribe(event) {
            event.preventDefault();
            const input = event.target.querySelector('input[type="email"]');
            const button = event.target.querySelector('button');
            const originalText = button.textContent;

            if (input.value.trim()) {
                button.textContent = '✓ Subscribed!';
                button.style.background = '#2b2b2b';
                button.style.pointerEvents = 'none';
                input.value = '';
                setTimeout(() => {
                    button.textContent = originalText;
                    button.style.background = '';
                    button.style.pointerEvents = '';
                }, 2500);
            }
        }
    </script>
</body>
</html>
