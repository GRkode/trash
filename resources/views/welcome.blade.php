<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SGDS-SYSTEME</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/manifest.json')}}">
    <!-- bootstrap css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/myCustom.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#"/></div>
</div>

<div class="wrapper">

    <div class="sidebar">
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
                <li><a href="#">Accueil</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#work">Avantages</a></li>
            </ul>
        </nav>
    </div>
    <div id="content">
        <!-- header -->
        <header>
            <!-- header inner -->
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="{{route('welcome')}}">
                                            <img src="{{asset('images/logo.png')}}" alt="#"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <ul class="btn">
                                <li><a href="{{route('login')}}">Se connecter</a></li>
                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="{{asset('images/menu_icon.png')}}" alt="#"/>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                    <div class="text-bg">
                                        <h1>Get<br> Thinking A <br>long time</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis </p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="{{asset('images/img2.png')}}"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid ">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                    <div class="text-bg">
                                        <h1>Get<br> Thinking A <br>long time</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis </p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="{{asset('images/img2.png')}}"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="carousel-caption ">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                    <div class="text-bg">
                                        <h1>Get<br> Thinking A <br>long time</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis </p>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                    <div class="images_box">
                                        <figure><img src="{{asset('images/img2.png')}}"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

        <div id="about" class="about">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-md-5">
                        <div class="about_img">
                            <figure><img src="{{asset('images/about_img.jpg')}}" alt="#"/></figure>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="titlepage">
                            <h2>A propos du <span class="blu">Système</span></h2>
                            <p>
                                Solution intelligente de gestion des déchets qui aide les villes et l'industrie de
                                la collecte des déchets à réduire les coûts d'exploitation pouvant atteindre jusqu'à
                                80%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Pourquoi vous fatiguer quand vous pouvez <span
                                        class="blu">travailler intelligemment?</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="work" class="work">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="titlepage text-center">
                            <img class="img-fluid" src="{{asset('images/fonctions/dynamic-routing.gif')}}" alt="">
                            <h2>Acheminement dynamique</h2>
                            <p>
                                La solution optimise les trajets et les horaires de collecte des déchets basés sur des
                                données chronologiques en temps réel et fournit des analyses prédictives afin de
                                permettre de prendre des décisions préalables et offre des consultations sur les
                                allocations de poubelles.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="titlepage text-center">
                            <img class="img-fluid" src="{{asset('images/fonctions/cost-reduction.gif')}}" alt="">
                            <h2>Réduction de coûts</h2>
                            <p>
                                Notre solution intelligente de logistique de gestion des déchets réduit la fréquence de
                                collecte des déchets d'une manière considérable, ce qui permet d'économiser le
                                carburant, la main-d'œuvre et les coûts d'entretien des parcs. Au total, la solution
                                peut réduire vos coûts d'exploitation jusqu'à 80%.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="titlepage text-center">
                            <img class="img-fluid" src="{{asset('images/fonctions/improved-cleanliness.gif')}}" alt="">
                            <h2>Propreté accrue</h2>
                            <p>
                                Dans les zones à forte concentration de population, une génération rapide de déchets
                                conduit très souvent à un débordement des poubelles et à des rues très sales. Notre
                                solution permet au personnel de collecte de déchets d'être informé des niveaux de
                                remplissage en temps réel et de recevoir des notifications de débordements de déchets.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="titlepage text-center">
                            <img class="img-fluid" src="{{asset('images/fonctions/co2-reduction.gif')}}" alt="">
                            <h2>Réduction des émissions de CO2</h2>
                            <p>
                                La collecte des déchets est une proposition très polluante. Notre solution offre le
                                moyen d'avoir un minimum de camions sur la route pour si peu de temps, signifiant une
                                émanation minimum de gaz à effet de serre, un minimum de pollution sonore et une moindre
                                surcharge des routes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid" src="{{asset('images/SGDS-SN-LOGO.png')}}" alt="">
                        </div>
                        <div class="col-md-4">
                            <div class="address">
                                <h3>Links</h3>
                                <ul class="Menu_footer">
                                    <li class="active"><a href="#">Accueil</a></li>
                                    <li><a href="#about">A propos </a></li>
                                    <li><a href="#work">Avantages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="address">
                                <h3>Follow Us</h3>
                            </div>
                            <ul class="social_icon">
                                <li><a href="#">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p>@ 2021 SGDS-GN. Tous droits réservés.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
    </div>
    <div class="overlay"></div>

    <script src="{{asset('js/backend/jquery.min.js')}}"></script>
    <script src="{{asset('js/backend/bootstrap.bundle.min.js')}}"></script>

    <!-- sidebar -->
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/myCustom.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</div>
</body>
</html>

