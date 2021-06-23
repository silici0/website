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
                <span class="spin-reverse">
                    <div class="large squircle one"></div>
                </span>
                <div class="detail large squircle two">
                    <div class="content">
                        <h1>Rafael Cunha</h1>
                        <h2>Analista / Desenvolvedor</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="wave">
            <div>
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(16,143,236,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(16,143,236,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(16,143,236,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#103FEC" />
                    </g>
                </svg>
            </div>
        </section>
        <style type="text/css">

            .waves {
  position:relative;
  width: 100%;
  height:15vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:150px;
}
            .parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
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
            span.spin-reverse {
                animation: spin 30s linear infinite;
            }
            .large.squircle {
                position: absolute;
                background: rgba(30, 7, 66, 0.65);
                border: none;
                left: calc(50% - 10em);
                top: calc(50% - 10em);
                width: 20em;
                height: 20em;
                transform: none;
            }
            .detail.large.squircle {
                left: calc(50% - 7.5em);
                top: calc(50% - 7.5em);
            }
            .detail .content {
                display: flex;
                justify-content: center;
                height: 100%;
                align-items: center;
            }
            .detail .content h1 {
                color: white;
                font-size: 45px;
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
