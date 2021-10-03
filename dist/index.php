<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <!-- Import fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/public/bootstrap/bootstrap.min.css">

    <!-- Custom scripts -->
    <script src="/experiments/page_scroll/page.js"></script>
    <script src="/public/scripts/utils.js"></script>
    <script src="/public/scripts/main.js"></script>
    <script src="/public/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/public/scripts/login.js"></script>

    <!-- Custom styles -->
    <link rel="stylesheet" href="/public/styles/main.css">
    <link rel="stylesheet" href="/experiments/page_scroll/page.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://quozul.dev/public/assets/icon.png">

    <link rel="canonical" href="https://quozul.dev/">

    <!-- Primary Meta Tags -->
    <title>The Secret Website Of Quozul</title>
    <meta name="description" content="Hi, I'm a full stack web developer. I'm still in high school for now but here's my website. Come check it out!">
    <meta name="author" content="Quozul">
    <meta name="creator" content="Quozul">
    <meta name="publisher" content="Quozul">

    <meta name="keywords" content="quozul,developer,web,javascript,fullstack">
    <meta name="color-scheme" content="dark">

    <meta name="subject" content="Personal website of Quozul">
    <meta name="copyright" content="Quozul">
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow">
    <meta name="designer" content="Quozul">
    <meta name="owner" content="Quozul">
    <meta name="url" content="https://quozul.dev/">

    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">

    <!-- Open Graph / Facebook -->
    <meta name="og:type" property="og:type" content="profile">
    <meta name="og:url" property="og:url" content="https://quozul.dev/">
    <meta name="og:title" property="og:title" content="Quozul.dev">
    <meta name="og:description" property="og:description" content="Hi, I'm a full stack web developer. I'm still in high school for now but here's my website. Come check it out!">
    <meta name="og:image" property="og:image" content="https://quozul.dev/public/assets/banner.png">

    <meta name="og:site_name" property="og:site_name" content="Quozul.dev">
    <meta name="og:locale" property="og:locale" content="en_US">
    <meta name="og:type" property="og:type" content="website">

    <meta name="og:email" property="og:email" content="quozul@outlook.com"/>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://quozul.dev/">
    <meta name="twitter:title" content="Quozul.dev">
    <meta name="twitter:description" content="Hi, I'm a full stack web developer. I'm still in high school for now but here's my website. Come check it out!">
    <meta name="twitter:image" content="https://quozul.dev/public/assets/banner.png">

    <meta name="twitter:site" content="@quozul">
    <meta name="twitter:creator" content="@quozul">
    <meta name="twitter:image:src" content="https://quozul.dev/public/assets/banner.png">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Person",
            "name": "Quozul",
            "jobTitle": "Developer",
            "gender": "male",
            "image": "https://quozul.dev/assets/icon.png",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Paris",
                "addressCountry": "France"
            },
            "email": "quozul@outlook.com",
            "nationality": "French"
        }
    </script>
</head>

<body class="d-flex flex-column vh-100 justify-content-between">
<header class="container">
    <div class="mt-3 p-0">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="navbar-collapse collapse w-100 navbarSupportedContent order-1 order-md-0">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="/experiments">Experiments</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto my-2 order-0 order-md-1 position-relative">
                <a class="navbar-brand mx-2" href="/">
                    <img src="/public/assets/icon.png" width="32" height="32" class="d-inline-block align-top" alt="" loading="lazy">
                    Quozul.dev
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 navbarSupportedContent order-2 order-md-2">
                <ul class="navbar-nav w-100 text-center justify-content-between align-items-center">
                    <li class="nav-item m-0">
                        <a class="nav-link" href="/resources">Resources</a>
                    </li>
                    <li class="nav-item login-button">
                        <a class="nav-link d-flex align-items-center p-0" id="loginButton" href="https://discord.com/oauth2/authorize?client_id=883631190232399872&redirect_uri=https%3A%2F%2Fquozul.dev%2F&response_type=code&scope=identify">
                            <img src="/public/assets/Discord-Logo-White.svg" class="me-1 h-1" alt="Discord logo">
                            Login with Discord
                        </a>
                        <div id="logoutButton">
                            <span>Logout</span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<main class="flex-center h-100">
    <page-container id="menuReady" width="100vw" height="100%" direction="vertical">
        <page-section data-name="Home">
            <div class="full-size flex-center">
                <div class="mh-100">
                    <div class="d-inline-flex flex-column align-items-start m-0">
                        <h2 class="text-start d-inline-block m-0">Web developer</h2>
                        <h1 class="display m-0 line-title line-title-center">Quozul</h1>
                    </div>

                    <div class="scroll-down">
                        <div class="scroll-arrow"></div>
                        Discover my projects
                    </div>
                </div>
            </div>
        </page-section>

        <page-section data-name="Projects" class="page-down">
            <page-container id="projectsContainer" width="100%" height="calc(100% - 73px)" class="z-20" direction="horizontal">
                <page-section data-name="Minecraft plugins">
                    <div class="full-size flex-center">
                        <div class="mh-100">
                            <div class="row g-0 justify-content-center align-items-stretch">
                                <div class="p-3 text-center text-md-end col-12 col-md-6 d-flex flex-column justify-content-start">
                                    <h1 class="text-md-end line-title line-title-left">OnDemandServer</h1>
                                    <ul class="list-unstyled">
                                        <li>Start and stop Minecraft servers on demand from the proxy.</li>
                                        <li><b>Date:</b> December 20, 2020</li>
                                        <li><b>Language:</b> English, customizable</li>
                                        <li><b>Compatibility:</b> BungeeCord & Waterfall proxies</li>
                                        <li>
                                            <a class="show-link" href="https://github.com/Quozul/OnDemandServer" target="_blank" rel="noopener">GitHub</a>
                                            •
                                            <a class="show-link" href="/resources/#UHJvamVjdHMlMkZNaW5lY3JhZnQlMkZQbHVnaW5z">Check resources for download</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 text-center text-md-start col-12 col-md-6 d-flex flex-column justify-content-start">
                                    <h1 class="line-title line-title-right">Survival-Games</h1>
                                    <ul class="list-unstyled">
                                        <li>Not exactly a survival games plugin for Minecraft.</li>
                                        <li><b>Date:</b> September 9, 2020</li>
                                        <li><b>Language:</b> French</li>
                                        <li><b>Compatibility:</b> Spigot and derivatives</li>
                                        <li>
                                            <a class="show-link" href="https://github.com/Quozul/Survival-Games" target="_blank" rel="noopener">GitHub</a>
                                            •
                                            <a class="show-link" href="/resources/#UHJvamVjdHMlMkZNaW5lY3JhZnQlMkZQbHVnaW5z">Check resources for download</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </page-section>

                <page-section data-name="DHStatsViewer" class="page-right">
                    <div class="full-size flex-center">
                        <div class="row g-0 justify-content-center align-items-stretch">
                            <div class="p-3 justify-content-center col-md-6 col-12 d-flex flex-column justify-content-center">
                                <img loading="lazy" src="/public/assets/projects/DHStatsViewer.png" alt="DHStatsViewer" class="img-fluid">
                            </div>
                            <div class="d-none d-md-block border-start"></div>
                            <div class="p-3 text-start col-md-6 col-12 d-flex flex-column justify-content-center">
                                <h1 class="line-title line-title-center">DHStatsViewer</h1>
                                <ul class="list-unstyled">
                                    <li><a class="show-link" href="https://dht.chylex.com/" target="_blank" rel="noopener">Discord History Tracker</a> visualizer.</li>
                                    <li><b>Date:</b> Some times in August 2018</li>
                                    <li><b>Language:</b> English</li>
                                    <li><b>Compatibility:</b> Compiled for Windows & portable</li>
                                    <li>
                                        <a class="show-link" href="https://github.com/Quozul/DHStatsViewer/releases/latest" target="_blank" rel="noopener">GitHub download</a>
                                        •
                                        <a class="show-link" href="/resources/#UHJvamVjdHMlMkZESFN0YXRzVmlld2Vy">Check resources for download</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </page-section>

                <page-section data-name="WebServer" class="page-right">
                    <div class="full-size flex-center">
                        <div class="row g-0 justify-content-center align-items-stretch">
                            <!--<div class="p-3 justify-content-center col-md-6 col-12 d-flex flex-column justify-content-center">
                                <img loading="lazy" src="/public/assets/projects/DHStatsViewer.png" alt="DHStatsViewer" class="img-fluid">
                            </div>-->
                            <div class="d-none d-md-block border-start"></div>
                            <div class="p-3 text-start col-md-6 col-12 d-flex flex-column justify-content-center w-100">
                                <h1 class="line-title line-title-center">WebServer</h1>
                                <ul class="list-unstyled">
                                    <li>WebServer written in C++ with lua server-side scripting.</li>
                                    <li><b>Date:</b> September 2021</li>
                                    <li><b>Language:</b> None</li>
                                    <li><b>Compatibility:</b> Windows & Linux</li>
                                    <li>
                                        <a class="show-link" href="https://github.com/Quozul/WebServer" target="_blank" rel="noopener">GitHub</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </page-section>

                <page-section data-name="Lovcon" class="page-right">
                    <div class="full-size flex-center">
                        <div class="row g-0 justify-content-center align-items-stretch">
                            <div class="p-3 justify-content-center col-md-6 col-12 d-flex flex-column justify-content-center">
                                <img loading="lazy" src="/public/assets/projects/lovcon.png" alt="Lovcon" class="img-fluid">
                            </div>
                            <div class="d-none d-md-block border-start"></div>
                            <div class="p-3 text-start col-md-6 col-12 d-flex flex-column justify-content-center">
                                <h1 class="line-title line-title-center">Lovcon</h1>
                                <ul class="list-unstyled">
                                    <li>Fully-featured in-game console which you can use and edit it as your desires.</li>
                                    <li><b>Date:</b> September 15, 2018</li>
                                    <li><b>Language:</b> English</li>
                                    <li><b>Compatibility:</b> Library for <a class="show-link" href="https://love2d.org/" target="_blank" rel="noopener">Löve2D</a></li>
                                    <li>
                                        <a class="show-link" href="https://github.com/Quozul/lovcon/releases/latest" target="_blank" rel="noopener">GitHub download</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </page-section>

                <page-section data-name="Pirikium" class="page-right">
                    <div class="full-size flex-center">
                        <div class="row g-0 justify-content-center align-items-stretch">
                            <div class="p-3 justify-content-center col-md-6 col-12 d-flex flex-column justify-content-center">
                                <img loading="lazy" src="/public/assets/projects/pirikium.jpg" alt="Pirikium" class="img-fluid">
                            </div>
                            <div class="d-none d-md-block border-start"></div>
                            <div class="p-3 text-start col-md-6 col-12 d-flex flex-column justify-content-center">
                                <h1 class="line-title line-title-center">Pirikium</h1>
                                <ul class="list-unstyled">
                                    <li>Top-down shooter game.</li>
                                    <li><b>Date:</b> July 27, 2018</li>
                                    <li><b>Language:</b> English, French & Polish</li>
                                    <li><b>Compatibility:</b> Compiled for Windows & portable</li>
                                    <li>
                                        <a class="show-link" href="https://github.com/Quozul/Pirikium/releases/latest" target="_blank" rel="noopener">GitHub download</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </page-section>

                <page-section data-name="Text based games">
                    <div class="full-size flex-center">
                        <div class="mh-100">
                            <div class="row g-0 justify-content-center align-items-stretch">
                                <div class="p-3 text-center text-md-end col-12 col-md-6 d-flex flex-column justify-content-start">
                                    <h1 class="text-md-end line-title line-title-left">Pak</h1>
                                    <ul class="list-unstyled">
                                        <li>Text based game in Java.</li>
                                        <li><b>Date:</b> June 1, 2019</li>
                                        <li><b>Language:</b> English</li>
                                        <li><b>Compatibility:</b> It's Java, everywhere</li>
                                        <li>
                                            <a class="show-link" href="https://github.com/Quozul/Pak" target="_blank" rel="noopener">GitHub</a>
                                            •
                                            <a class="show-link" href="/resources/#UHJvamVjdHMlMkZQYWs=">Check resources for download</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3 text-center text-md-start col-12 col-md-6 d-flex flex-column justify-content-start">
                                    <h1 class="line-title line-title-right">Fuald</h1>
                                    <ul class="list-unstyled">
                                        <li>Text-based RPG game in shell script.</li>
                                        <li><b>Date:</b> April 16, 2018</li>
                                        <li><b>Language:</b> English & French</li>
                                        <li><b>Compatibility:</b> Linux based systems</li>
                                        <li>
                                            <a class="show-link" href="https://github.com/Quozul/Fuald" target="_blank" rel="noopener">GitHub</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </page-section>
            </page-container>

            <div id="subMenu" data-noscroll><div></div></div>
        </page-section>

        <page-section data-name="About" class="page-down">
            <div class="full-size flex-center">
                <div class="mh-100">
                    <div class="row g-0">
                        <div class="col-12 col-md-6 text-md-end p-3">
                            <h1 class="line-title line-title-left pe-md-5">About</h1>
                            <p>
                                Living in Paris, France, I'm currently a student in IT and I'm working as a web developer.
                            </p>
                            <p>
                                I mostly like to make random ideas that got through my mind.<br>
                                Most of them are not available on my website though.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 p-3">
                            <img loading="lazy" src="/public/assets/icon.png" alt="Logo" class="d-none d-md-block logo" width="64" height="64">

                            <h1 class="line-title line-title-right ps-md-5">Contact</h1>
                            <p>
                                Contact by mail: <a href="mailto:contact@quozul.dev" class="show-link">contact@quozul.dev</a>.<br>
                                I may be able to help you develop a website or an app... 🤔
                            </p>
                            <p>
                                You can find me on almost all social media under the username <u class="select">Quozul</u>.<br>
                                <small>I hope to see you around <span class="d-inline-block emoji">;-)</span></small>
                            </p>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-12 text-md-center p-3">
                            <h1 class="line-title line-title-center">Resources</h1>
                            <p>
                                More projects on <a class="show-link" href="https://github.com/Quozul/" target="_blank" rel="noopener">GitHub</a>.<br>
                                As well as on the <a class="show-link" href="/resources/">resources</a> and <a class="show-link" href="/experiments/">experiments</a> pages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </page-section>
    </page-container>
</main>

<div class="bubbles"></div>

<footer class="container">
    <div class="mb-3 text-center p-3 container shadow-lg rounded text-white">
        © Copyright — Quozul — All rights reserved.
    </div>
</footer>
</body>

</html>
