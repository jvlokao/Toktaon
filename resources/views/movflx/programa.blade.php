<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Tok On-Line | O Futuro está aqui</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/odometer.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/aos.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/slick.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/default.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/responsive.css') }}">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="{{ URL::to('img/preloader.svg') }}" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ URL::to('img/logo/logo.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="/">Início</a></li>
                                            <li><a href="/#assistaagr">Assista Agora</a></li>
                                            <li class="active"><a href="/#programas">Programas</a></li>
                                            <li><a href="/#parceiros">Se Torne Parceiro</a></li>
                                            <li><a href="/contato">Contatos</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="/"><img src="{{ URL::to('img/logo/logo.png') }}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->



        <!-- main-area -->
        <main>

            <!-- movie-details-area -->
            <section class="movie-details-area" data-background="{{ URL::to('img/bg/movie_details_bg.jpg')}}">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-xl-3 col-lg-4">
                            <div class="movie-details-img">
                                <img src="{{URL::to($programa->url_poster)}}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8">
                            <div class="movie-details-content">
                                <h5>Novos Episódios</h5>
                                <h2>{{$programa->nome_programa}}</h2>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span style="display:none;">Pg 18</span>
                                            <span>hd</span>
                                        </li>
                                        <li class="category">
                                            <a>{{$programa->tags}}</a>
                                        </li>
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> {{$programa->ano}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{$programa->sinopse}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            <!-- episode-area -->
            <section class="episode-area episode-bg" data-background="{{URL::to('img/bg/episode_bg.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="movie-episode-wrap">
                                <div class="episode-top-wrap">
                                    <div class="section-title">
                                        <span class="sub-title">Tok-Online</span>
                                        <h2 class="title">Assista Já</h2>
                                    </div>
                                </div>
                                <div class="episode-watch-wrap">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <button class="btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="season">Episódios</span>
                                                    <span class="video-count">{{$episodios->count()}} Episódios Completos</span>
                                                </button>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <ul>
                                                    @foreach ($episodios as $episodio)
                                                        <li><a href="{{$episodio->url_video}}" class="popup-video"><i class="fas fa-play"></i> {{$episodio->titulo}}</a> <span class="duration"><i class="far fa-clock"></i> {{$episodio->duracao}} Min</span></li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="episode-img">
                                <img src="{{ URL::to($programa->url_poster_maior)}}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- episode-area-end -->

        </main>
        <!-- main-area-end -->


         <!-- footer-area -->
         <footer>
            <div class="footer-top-wrap">
                <div class="container">
                    <div class="footer-menu-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="footer-logo">
                                    <a href="/"><img src="{{ URL::to('img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="footer-menu">
                                    <nav>
                                        <ul class="navigation">
                                            <li><a href="/">Início</a></li>
                                            <li><a href="/#assistaagr">Assista Agora</a></li>
                                            <li><a href="/#programas">Programas</a></li>
                                            <li><a href="/#parceiros">Se Torne Parceiro</a></li>
                                            <li><a href="/contato">Contatos</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-quick-link-wrap">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                            </div>
                            <div class="col-md-5">
                                <div class="footer-social">
                                    <ul>
                                        <<li><a href="https://www.facebook.com/tokon.line.WEBTV"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/tokonline.webtv/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC-vakvP3A-suRr6EIli8PAg"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="https://wa.me/5522981512501"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2021. Todos os direitos reservados por <a href="/">Tok-Online</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="{{ URL::to('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ URL::to('js/popper.min.js') }}"></script>
        <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ URL::to('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.odometer.min.js') }}"></script>
        <script src="{{ URL::to('js/jquery.appear.js') }}"></script>
        <script src="{{ URL::to('js/slick.min.js') }}"></script>
        <script src="{{ URL::to('js/ajax-form.js') }}"></script>
        <script src="{{ URL::to('js/wow.min.js') }}"></script>
        <script src="{{ URL::to('js/aos.js') }}"></script>
        <script src="{{ URL::to('js/plugins.js') }}"></script>
        <script src="{{ URL::to('js/main.js') }}"></script>
    </body>
</html>
