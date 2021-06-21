<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rafael Cunha personal website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="preload" href="/css/website.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="website.css"></noscript>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <head>
            <div class="container is-fluid">
                <nav class="navbar" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a href="/" class="navbar-item">
                            <p class="logo">Rafael Cunha</p>
                        </a>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="navbar-item">
                                Sobre
                            </div>
                            <div class="navbar-item">
                                Skillz
                            </div>
                            <div class="navbar-item">
                                Blog
                            </div>
                            <div class="navbar-item">
                                Contato
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </head>
        <section id="Sobre">
            <div class="container">
                <div class="">
                    <div class="spin">
                        <div class="large circle one"></div>
                        <div class="large circle two"></div>
                        <div class="large circle three"></div>
                        <div class="large circle four"></div>
                        <div class="large circle five"></div>
                        <div class="large circle six"></div>
                        <div class="large circle seven"></div>
                        <div class="large circle eight"></div>
                    </div>
                </div>
            </div>
        </section>
        <style type="text/css">
            .spin {
                display: block;
                animation: spin 10s linear infinite;
            }
            @keyframes spin {
              0% {
                transform: rotateZ(0);
              }
              100% {
                transform: rotateZ(360deg);
              }
            }
            .circle {
                border-radius: 50%;
                left: calc(50% - 6.25em);
                top: calc(50% - 12.5em);
                transform-origin: 50% 12.5em;
            }
        </style>
    </body>
</html>
