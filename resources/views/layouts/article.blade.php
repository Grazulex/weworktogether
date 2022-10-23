<!doctype html>
<html lang="fr">
    <head >
    <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <title>We Share Our Workspace</title>
        <meta name="title" content="We Share Our Workspace">
        <meta name="description" content="">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    </head>

    <body>

    <div class="page-wrapper page-article page-bg-white">

        <div class="page-container-large">
        
            <header class="header">

                <a href="{{ route('home') }}" class="headline">We Share Our Workspace</a>

                <div class="is-hidden-desktop">

                    <img class="icon-nav" src="images/icon-nav-black.svg" alt="Ouvrir" />

                </div>

                <ul class="nav-links">
                    <img class="icon-close is-hidden-desktop" src="images/icon-close.svg" alt="Fermer" />
                    <li class="link-item">
                        <a href="{{ route('about') }}" class="link">About us</a>
                    </li>
                    <li class="link-item">
                        <a href="{{ route('contact') }}" class="link">Contact us</a>
                    </li>
                    <li class="link-item">
                        <a href="{{ route('blog') }}" class="link">Blog</a>
                    </li>
                    <li class="link-item">
                        <a href="{{ route('filament.pages.dashboard') }}" class="btn btn-orange">Log In</a>
                    </li>
                </ul>

            </header>

        </div>

        <div class="page-container">
                @yield('content')
        </div>

        <footer class="nav-footer">

            <div class="page-container">

                <div class="columns is-desktop">
                    
                    <div class="column is-narrow">
                        
                        <a href="{{ route('home') }}" class="headline">We Share Our Workspace</a>

                        <div class="social-list">
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/facebook.svg" alt="" />
                            </a>
                            <a class="social-link" href="#" target="_blank">
                                <img class="social-icon" src="images/linkedin.svg" alt="" />
                            </a>
                        </div>

                    </div>

                    <div class="column is-paddingless is-flex is-justify-content-center footer-col-links">
                        
                        <div class="columns">
                            
                            <div class="column">
                                <p class="footer-title">Information</p>
                                <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
                                <a href="{{ route('about') }}" class="footer-link">About Us</a>
                                <a href="faq.html" class="footer-link">FAQs</a>
                            </div>

                            <div class="column is-narrow is-hidden-mobile"></div>

                            <div class="column">
                                <p class="footer-title">General</p>
                                <a href="privacy-policy.html" class="footer-link">Privacy Policy</a>
                                <a href="cookie-policy.html" class="footer-link">Cookie Policy</a>
                                <a href="terms-conditions.html" class="footer-link">Terms & Conditions</a>
                                <a href="sitemap.html" class="footer-link">Sitemap</a>
                            </div>

                            <div class="column is-narrow is-hidden-mobile"></div>

                            <div class="column">
                                <p class="footer-title">News</p>
                                <a href="coworking.html" class="footer-link">Coworking</a>
                                <a href="wellbeing.html" class="footer-link">Wellbeing</a>
                                <a href="professional-development.html" class="footer-link">Professional Development</a>
                            </div>

                        </div>

                    </div>

                    <div class="column is-narrow is-flex is-justify-content-flex-start is-flex-direction-column is-align-items-flex-start">
                        
                        <p class="footer-title">Subscribe to our newsletter</p>

                        <form action="" class="footer-newsletter">
                            <input type="text" placeholder="Email" />
                            <button type="submit">Subscribe</button>
                        </form>

                        <!-- <p class="newsletter-status success">Success!</p> -->
                        <!-- <p class="newsletter-status error">Error!</p> -->

                    </div>

                </div>

                <p class="text copyright">
                    © 2022 We Share Our Workspace. All Rights Reserved.
                </p>

            </div>

        </footer>

    </div>

    </body>

</html>