<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rafael Cunha Tpok</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="preload" href="{{ asset('css/website.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/website.css') }}"></noscript>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P6QR2BL');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P6QR2BL"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <section id="head">
            <div class="container">
                <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a href="/" class="navbar-item">
                            <p class="logo">Rafael Cunha</p>
                        </a>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">
                        <!-- <div class="navbar-end">
                            <a href="#" class="navbar-item">
                                Sobre
                            </a>
                            <a href="#" class="navbar-item">
                                Skillz
                            </a>
                            <a href="#" class="navbar-item">
                                Blog
                            </a>
                            <a href="#" class="navbar-item">
                                Contato
                            </a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </section>
        <section id="tpok">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <div class="columns">
                            <div class="column">
                                
                                <div class="emoji smile">
                                    <figure class="face">
                                        <span class="eyes">
                                            <span class="eye"></span>
                                            <span class="eye"></span>
                                        </span>
                                        <span class="mouth">
                                        </span>
                                    </figure>
                                </div>
                            </div>
                            <div class="column">

                                <h1>Mensagem enviada com sucesso!</h1>
                                <h2>Logo entrarei em contato.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="content">
                    <div class="block">
                        <p class="small">Copyright © 2021 Rafael Cunha</p>
                    </div>
                    <div clss="block">
                        <a href="https://bulma.io">
                          <img
                            src="https://bulma.io/images/made-with-bulma.png"
                            alt="Made with Bulma"
                            width="128"
                            height="24">
                        </a>
                    </div>
                </div>                          
            </div>
        </footer>
        <style type="text/css">
            #tpok {
                padding-top: 140px;
            }
            .emoji {
                box-sizing: border-box;
                float: left;
            }

            .face {
                width: 100px;
                height: 100px;
                position: relative;
                margin: 0 15px 30px 0;
                border-radius: 50%;
                background: #F2DD68;
            }

            .face:after {
                content: '';
                display: block;
                position: absolute;
                width: 100%;
                height: 100%;
                top: -8px;
                left: -8px;
                border-radius: 50%;
                box-shadow: 8px 8px 0 0 rgba(0, 0, 0, 0.07);
            }

            .eye {
                position: absolute;
                width: 11px;
                height: 11px;
                top: 32px;
                left: 16px;
                z-index: 1;
                border-radius: 50%;
                background: #995710;
            }

            .eye:last-child {
                left: auto;
                right: 16px;
            }
            .emoji .eye {
                animation-name: blink;
                animation-iteration-count: infinite;
                animation-duration: 2s;
            }

            @keyframes blink {
                10% {
                    height: 11px;
                    top: 32px;
                }
                30% {
                    height: 1px;
                    top: 37px;
                }
                50% {
                    height: 11px;
                    top: 32px;
                }
            }

            .mouth {
                position: absolute;
                top: 48px;
                left: 0;
                right: 0;
                z-index: 1;
                width: 70px;
                height: 34px;
                margin: 0 auto;
                border-radius: 0 0 70px 70px;
                overflow: hidden;
                background: #995710;
            }

        </style>
    </body>
</html>
