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
            <div class="block">
                <span class="spin">
                    <div class="large circle one"></div>
                    <div class="large circle two"></div>
                    <div class="large circle three"></div>
                    <div class="large circle four"></div>
                    <div class="large circle five"></div>
                    <div class="large circle six"></div>
                    <div class="large circle seven"></div>
                    <div class="large circle eight"></div>
                </span>
                <span class="pulse">
                    <div class="small circle one"></div>
                    <div class="small squircle two"></div>
                    <div class="small circle three"></div>
                    <div class="small squircle four"></div>
                    <div class="small circle five"></div>
                    <div class="small squircle six"></div>
                    <div class="small circle seven"></div>
                    <div class="small squircle eight"></div>
                </span>
            
            </div>
        </section>
        <style type="text/css">
            #Sobre {
                width: 100vw;
                height: calc(100vh - 52px);
                position: relative;
                overflow: hidden;
            }
            #Sobre span {
                width: 25em;
                height: 25em;
                position: absolute;
                margin: auto;
                top: calc(50% - 10em);
  left: calc(50% - 10em);
                display: block;
            }

            .spin {
                
                animation: spin 10s linear infinite;
                
            }
            .pulse {
                animation: spin-pulse 20s linear infinite;
            }
            @keyframes spin-pulse {
                0% {
                    transform: scale(1.1) rotateZ(0);
                }
                50% {
                    transform: scale(0.9) rotateZ(180deg);
                }
                100% {
                    transform: scale(1.1) rotateZ(360deg);
                }
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
.squircle {
  border-radius: 25%;
}
            .circle, .squircle {
                width: 15.5em;
                height: 15.5em;
                position: absolute;
                border-top: 0.1em solid rgba(255,255,255,0.4);
            }
            .small {
    width: 5em;
    height: 5em;
    left: calc(50% - 2.5em);
    top: calc(50% - 18em);
    transform-origin: 50% 18em;
    box-shadow: 0 0.25em 0.5em rgb(0 0 0 / 20%);
            }
        </style>
    </body>
</html>
