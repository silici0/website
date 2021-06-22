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
                width: 25em;
                height: 25em;
                position: absolute;
                top: calc(50% - 6em);
                left: calc(50% - 10em);
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
                left: calc(50% - 8em);
                top: calc(50% - 16.7em);
                transform-origin: 50% 16.5em;
            }
            .large.circle {
                box-shadow: 0 1em 2em rgba(0,0,0,0.5);
            }
.one {
background: rgba(16, 63, 236, 0.75);
transform: rotateZ(225deg);
}
.two {
background: rgba(37, 172, 162, 0.75);
transform: rotateZ(180deg);
}
.three {
background: rgba(233, 124, 32, 0.75);
transform: rotateZ(135deg);
}
.four {
background: rgba(235, 67, 35, 0.75);
transform: rotateZ(90deg);
}
.five {
background: rgba(190, 28, 65, 0.75);
transform: rotateZ(45deg);
}
.six {
background: rgba(208, 57, 159, 0.75);
transform: rotateZ(0);
}
.seven {
background: rgba(150, 32, 198, 0.75);
transform: rotateZ(-45deg);
}
.eight {
background: rgba(95, 33, 203, 0.75);
transform: rotateZ(-90deg);
}
            .circle, .squircle {
                width: 15.5em;
                height: 15.5em;
                position: absolute;
                border-top: 0.1em solid rgba(255,255,255,0.4);
            }
        </style>
    </body>
</html>
