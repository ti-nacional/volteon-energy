<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>Indusy - Industrial & Factory Solutions HTML Template</title>

    <!-- META TAGS -->
    <meta name="keywords"
        content="agricultural, business, chemical, construction, energy, engineering, gas, industrial, industries, manufacturing, material, mechanical, oil, petroleum">

    <!--  FAVICON  -->
    <link rel="shortcut icon" href="img/master/favicon.png">

    <!-- BOOTSTRAP FRAMEWORK STYLES -->
    <link rel="stylesheet" href={{ asset('template/css/bootstrap.min.css') }}>

    <!-- FONT AWESOME ICONS LIBRARY -->
    <link rel="stylesheet" href="fonts/css/all.min.css">

    <!-- MAIN CSS STYLE SHEET -->
    <link rel="stylesheet" href={{ asset('template/css/navigation.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/stylesheet.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/responsive.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/slick.min.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }}>

    <!-- MODERNIZR LIBRARY -->
    <script src={{ asset('template/js/modernizr-custom.js') }}></script>

</head>

<body>

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- LOADER -->

    <!--HEADER START-->
    @include('site.layouts.header')
    <!--HEADER END-->

    <!--SLIDER START-->
    <div class="home-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('../../template/img/images/banner-1.png')">
                    <div class="container">
                        <div class="slider-caption slider-caption-alt">
                            <h2 class=" animated fadeInRight">LMG energia agora
                                <br><span>É Volteon Energia</span>
                            </h2>
                            <p class="lead animated fadeInRight">A energia limpa é a tônica do futuro e a oportunidade
                                que todos precisam.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../../template/img/images/banner-2.png')">
                    <div class="container">
                        <div class="slider-caption slider-caption-alt">
                            <h2 class=" animated fadeInRight">Potencial energético
                                <br> <span>para o futuro da indústria.</span>
                            </h2>
                            <p class="lead animated fadeInRight">A energia limpa é a tônica do futuro e a oportunidade
                                que todos precisam.</p>

                        </div>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('../../template/img/images/banner-3.png')">
                    <div class="container">
                        <div class="slider-caption slider-caption-alt">
                            <h2 class=" animated fadeInRight">LMG energia agora
                                <br><span>É Volteon Energia</span>
                            </h2>
                            <p class="lead animated fadeInRight">A energia limpa é a tônica do futuro e a oportunidade
                                que todos precisam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon custom-control" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon custom-control" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--SLIDER END-->

    <!--SERVICES BOXES START-->
    <div>
        <div class="row">
            <div class="col-md-4 col-lg-4 content-box"
                style="background-image: url('../../template/img/images/torres-1.png')">
                <a href="#" target="_blank">
                    <p>Nós trabalhamos com eficiência
                        energética, inovação e tecnologia.</p>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 content-box middle-box"
                style="background-image: url('../../template/img/images/moinho.png')">
                <a href="#" target="_blank">
                    <p>Temos como missão aumentar a
                        energia para o mercado.</p>
                </a>
            </div>
            <div class="col-md-4 col-lg-4 content-box"
                style="background-image: url('../../template/img/images/placas.png')">
                <a href="#" target="_blank">
                    <p>Acreditamos na energia limpa e
                        renovável como via de
                        competitividade para a indústria. </p>
                </a>
            </div>
        </div>
    </div>
    <!--SERVICES BOXES END-->

    <!-- CONTENT START -->
    <section class="about-us">
        <!-- HOME ABOUT START -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-about span-ha">
                        <div class="ha-title">
                            <h5>sobre nós</h5>
                        </div>
                        <h1 class="strong text-secondary">
                            Eficiência energética:
                            produtividade e
                            competitividade para
                            o futuro.
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 space-break span-ha">
                    <p class="mb-2">A Volteon Energia é uma empresa que amplia a capacidade energética da
                        indústria por
                        meio da construção de usinas de energia limpa. Tem como prática a sustentabilidade e
                        os novos recursos para compor uma matriz energética.
                    </p>
                    <p class="mb-2">
                        Em paralelo, é uma opção de negócio para aqueles que acreditam em recursos
                        renováveis como principais atores na construção do futuro com uma economia
                        consciente com o uso da tecnologia para a evolução de serviços.
                    </p>
                    <p class="strong text-dark">
                        A Volteon Energia está construindo um mundo mais sustentável
                        e você pode participar desse futuro.
                    </p>
                </div>
            </div>
            <div class="row container">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src={{ asset('template/img/images/engineer.svg') }} alt="Logo engenheiro">
                        <p class="text-dark strong pl-2">Engenheiros qualificados</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src={{ asset('template/img/images/shield.svg') }} alt="Logo Segurança">
                        <p class="text-dark strong pl-2">Segurança</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <img src={{ asset('template/img/images/innovation.svg') }} alt="Logo Inovação">
                        <p class="text-dark strong pl-2">Inovação</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- HOME ABOUT END -->

    <section>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src={{asset('template/img/images/eletro.png')}} alt="">
            </div>
            <div class="col-lg-6 mt-5">
                <div class="home-about span-ha">
                    <div class="ha-title">
                    <h5>Panorama geral</h5>
                    <h2 class="text-dark">
                        Inovação no setor tecnológico
                    </h2>
                    <p class="text-dark">O setor elétrico passa por uma transformação, com crescente verticalização, ou
                        seja, grupos estão atuando em diversas frentes: distribuição, geração,
                        transmissão e comercialização. Nesse contexto, as geradoras estão fortalecendo
                        seus braços de comercialização com fontes renováveis, uma tendência global.</p>
                        <ul class="major-panorama__ul">
                            <li>
                                <p>  A energia solar no Brasil cresceu mais de 212%, alcançando a marca de 2,4
                                    GIGAWATT instalados (ANEEL);</p>
                            </li>
                            <li>
                                <p>
                                    O Índice de Commodities do Banco Central (IC-BR), no que se refere a energia,
  registrou uma alta de 73,89% no IC-BR em 2021.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING TABLE START -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>Our Pricing</h2>
                <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow
                    business.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="shadow-pricing-table">
                        <div class="table-header">
                            <h3>Basic</h3>
                            <div class="pt-price">
                                <span class="pt-currency">$</span>
                                <span class="pt-value">30</span>
                                <span class="pt-duration">mo</span>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li><strong>50GB</strong> Disk Space</li>
                            <li><strong>30GB</strong> Monthly Bandwith</li>
                            <li><strong>20</strong> Email Accounts</li>
                            <li><strong>Unlimited</strong> Subdomains</li>
                            <li><strong>10</strong> Websites</li>
                            <li><strong>24/7</strong> Support</li>
                        </ul>
                        <a class="btn btn-custom" href="#" role="button">BUY NOW</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 shadow-center-table">
                    <div class="shadow-pricing-table">
                        <div class="table-header">
                            <h3>Standard</h3>
                            <div class="pt-price">
                                <span class="pt-currency">$</span>
                                <span class="pt-value">60</span>
                                <span class="pt-duration">mo</span>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li><strong>50GB</strong> Disk Space</li>
                            <li><strong>30GB</strong> Monthly Bandwith</li>
                            <li><strong>20</strong> Email Accounts</li>
                            <li><strong>Unlimited</strong> Subdomains</li>
                            <li><strong>10</strong> Websites</li>
                            <li><strong>24/7</strong> Support</li>
                        </ul>
                        <a class="btn btn-custom" href="#" role="button">BUY NOW</a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="shadow-pricing-table">
                        <div class="table-header">
                            <h3>Premium</h3>
                            <div class="pt-price">
                                <span class="pt-currency">$</span>
                                <span class="pt-value">90</span>
                                <span class="pt-duration">mo</span>
                            </div>
                        </div>
                        <ul class="pricing-features">
                            <li><strong>50GB</strong> Disk Space</li>
                            <li><strong>30GB</strong> Monthly Bandwith</li>
                            <li><strong>20</strong> Email Accounts</li>
                            <li><strong>Unlimited</strong> Subdomains</li>
                            <li><strong>10</strong> Websites</li>
                            <li><strong>24/7</strong> Support</li>
                        </ul>
                        <a class="btn btn-custom" href="#" role="button">BUY NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRICING TABLE END -->

        <!-- GRID GALLERY START -->
        <div class="container-fluid">
            <div class="row grid-boxes">
                <div class="col-md-6 col-lg-6 col-xl-3 grid-col">
                    <div class="grid-gallery-info">
                        <figure class="ggi-icon"><img src="img/master/solar-panel.svg" alt=""></figure>
                        <h3>Solar Panels</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 grid-col">
                    <figure class="grid-gallery-thumb">
                        <div class="ggt-caption">
                            <h3>Renewable Energy</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered</p>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 grid-col">
                    <div class="grid-gallery-info">
                        <figure class="ggi-icon"><img src="img/master/eolic-energy.svg" alt=""></figure>
                        <h3>Eolic Energy</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 grid-col">
                    <figure class="grid-gallery-thumb-2">
                        <div class="ggt-caption">
                            <h3>Save Energy Save Life</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                suffered. </p>
                            <h5><a href="#">Read More</a></h5>
                        </div>
                    </figure>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 grid-col">
                    <div class="grid-gallery-info">
                        <figure class="ggi-icon"><img src="img/master/atom.svg" alt=""></figure>
                        <h3>Nuclear Power</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 grid-col">
                    <div class="grid-gallery-info">
                        <figure class="ggi-icon"><img src="img/master/flash.svg" alt=""></figure>
                        <h3>Electric Power</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- GRID GALLERY END -->

        <!-- TEAM START -->
        <div class="container">
            <div class="section-title">
                <h2>Our Team</h2>
                <p>We specialise in intelligent & effective Search and believes in the power of partnerships to grow
                    business.</p>
            </div>
            <div class="team-carousel slider hover-effects image-hover">
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>John Doe</h3>
                                <p>Construction</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>Laura Smith</h3>
                                <p>Engineer</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>Ron Johnson</h3>
                                <p>Mechanical</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>Bryan Anderson</h3>
                                <p>Technician</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>Lake Jones</h3>
                                <p>Marketing</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="team-portrait">
                        <figure class="tp-headshot"><img src="https://via.placeholder.com//992x1300" alt="">
                        </figure>
                        <div class="tp-caption">
                            <div class="inner-tp-caption">
                                <h3>Sara Thomas</h3>
                                <p>Marketing</p>
                                <div class="tp-social">
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-facebook-f"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-twitter"></i></a></p>
                                    </div>
                                    <div class="social-icon">
                                        <p><a href="#"><i class="fab fa-linkedin-in"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TEAM END -->

    </section>
    <!-- CONTENT START -->

    <!-- FOOTER START -->
    @include('site.layouts.footer')
    <!-- FOOTER END -->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->

    <!-- JAVASCRIPTS -->
    <script src={{ asset('template/js/plugins.js') }}></script>
    <script src={{ asset('template/js/bootstrap.js') }}></script>
    <script src={{ asset('template/js/main.js') }}></script>
    <script src={{ asset('template/js/navigation.js') }}></script>
    <!-- JAVASCRIPTS END -->

</body>

</html>
