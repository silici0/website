<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rafael Cunha personal website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="preload" href="{{ asset('css/website.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ asset('css/website.css') }}"></noscript>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
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
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(149,97,232,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(149,97,232,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(149,97,232,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#9561E8" />
                    </g>
                </svg>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <br />
                        <h1 class="title">Sobre</h1>
                    </div>
                    <div class="block">
                        <br />
                        <h2>Rafael Cunha, analista/programador (full-stack web developer).</h2>
                        <br />
                        <p>Programador com experiencia de 10 anos + em PHP, backEnd, frontEnd. Aplicações em frameworks como wordpress, CI, Laravel, CakePHP, consumo e desenvolvimentos de API, webservices, git, jenkins, CI/CD, analise com prevenção de falhas, dashboards, configuração de pixel, GTM e campanhas.</p> 
                        <br />
                        <div class="links">
                            <a href="https://br.linkedin.com/in/rafael-cunha">
                                <img src="/img/icons8-linkedin-48.png" class="" alt="icone linkedin" />
                            </a>
                            <a href="https://github.com/silici0">
                                <img src="/img/icons8-github-48.png" class="" alt="icone github" />
                            </a>
                            <a href="https://rafacunha.com.br/blog">
                                <img src="/img/icons8-wordpress-48.png" class="" alt="icone wordpress" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skill">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <br />
                        <h1>Skills</h1>
                    </div>
                    <div class="block">
                        <br />
                        <h2>Programação</h2>
                        <br />
                        <p>Projetos de manutenção e desenvolvimentos de website, admin dashboards, ecommerce, landing pages com diversas linguagens e tecnologias.</p>
                    </div>
                    <div class="columns">
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-php.png" alt="PHP">
                                <p>PHP</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-html.png" alt="HTML">
                                <p>HTML</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-laravel.png" alt="Laravel">
                                <p>Laravel</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-javascript.png" alt="Javascript">
                                <p>Javascript</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-vuejs.png" alt="VueJS">
                                <p>VueJs</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-webpack.png" alt="Webpack">
                                <p>Webpack</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-sass.png" alt="SASS">
                                <p>SASS</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-vtex.png" alt="VTEX">
                                <p>VTEX</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-cakephp.png" alt="CakePHP">
                                <p>CakePHP</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-bitbucket.png" alt="Bitbucket">
                                <p>Bitbucket</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-bootstrap.png" alt="Bootstrap">
                                <p>Bootstrap</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-git.png" alt="GIT">
                                <p>GIT</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-python.png" alt="Python">
                                <p>Python</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/mysql-icon.png" alt="Mysql">
                                <p>Mysql</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/bulma-icon.png" alt="Bulma">
                                <p>Bulma</p>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <br />
                        <h2>Softwares</h2>
                        <br />
                        <p>Configuração de pixels, campanhas, software para análise e controles, além de integração e gerenciamento configurações de software.</p>
                    </div>
                    <div class="columns">
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-ads.png" alt="Adwords">
                                <p>Google Adwords</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-analytics.png" alt="Analytics">
                                <p>Google Analytics</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-datastudio.png" alt="DataStudio">
                                <p>Google DataStudio</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-gtm.png" alt="GTM">
                                <p>Google GTM</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-meetime.png" alt="Meetime">
                                <p>Meetime</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-pipedrive.png" alt="Pipedrive">
                                <p>Pipedrive</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-rd.png" alt="RDStation">
                                <p>RDStation</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-facebook.png" alt="Facebook">
                                <p>Facebook</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-merchant.png" alt="Merchant Center">
                                <p>Merchant Center</p>
                            </div>
                        </div>
                        <div class="column is-2">
                            <div class="box">
                                <img src="/img/icon-rollbar.png" alt="Rollbar">
                                <p>Rollbar</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="blog">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <h1>Blog</h1>
                        <p>Em construção</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato">
            <div class="container">
                <div class="content">
                    <div class="block">
                        <h1>Contato</h1>
                        <p>Entre em contato:</p>
                        <form method="POST" action="{{ route('envia-contato') }}">
                            @csrf
                            <div class="field">
                                <label for="name" class="label">Nome</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" pattern="^([A-zÀ-ÖØ-öø-ÿ ]+){3}*$" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="whatsapp" class="label">Whatsapp</label>
                                <div class="control">
                                    <input class="input" type="text" name="whatsapp" pattern="(\([1-9]{2}\)\s9[0-9]{4}-[0-9]{4})|((\([1-9]{2}\)) (?!9)[0-9]{4}-[0-9]{4})" placeholder="Ex. (11) 99999-9999" required>
                                </div>
                            </div>
                            <div class="field">
                                <textarea class="textarea" name="msg" placeholder="Mensagem" required></textarea>
                            </div>
                            <div class="field">
                                <input class="button"  type="submit" value="Enviar">
                            </div>
                            
                        </form>
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
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function(){
                var btnWhats = document.getElementsByName('whatsapp');
                btnWhats[0].addEventListener("keyup", function(e) {
                    var t = this.value;
                    t = (t = (t = t.replace(/\D/g, "")).replace(/^(\d{2})(\d)/g, "($1) $2")).replace(/(\d)(\d{4})$/, "$1-$2"),
                    this.value = t
                })
            }, false);
            
        </script>
    </body>
</html>
