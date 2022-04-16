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
    <section>
        <div class="row">
            <div class="col-lg-4 content-box"
                style="background-image: url('../../template/img/images/torres-1.png')">
                <a href="#" target="_blank">
                    <p>Nós trabalhamos com eficiência
                        energética, inovação e tecnologia.</p>
                </a>
            </div>
            <div class="col-lg-4 content-box middle-box"
                style="background-image: url('../../template/img/images/moinho.png')">
                <a href="#" target="_blank">
                    <p>Temos como missão aumentar a
                        energia para o mercado.</p>
                </a>
            </div>
            <div class="col-lg-4 content-box"
                style="background-image: url('../../template/img/images/placas.png')">
                <a href="#" target="_blank">
                    <p>Acreditamos na energia limpa e
                        renovável como via de
                        competitividade para a indústria. </p>
                </a>
            </div>
        </div>
    </section>
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
            <div class="col-lg-6 p-0">
                <img class="img-fluid" src={{ asset('template/img/images/eletro.png') }} alt="">
            </div>
            <div class="col-lg-6 mt-2 pl-5 p-3">
                <div class="home-about span-ha">
                    <div class="ha-title">
                        <h5>Panorama geral</h5>
                        <h2 class="text-dark">
                            Inovação no setor tecnológico
                        </h2>
                        <p class="text-dark mb-3">O setor elétrico passa por uma transformação, com crescente
                            verticalização, ou
                            seja, grupos estão atuando em diversas frentes: distribuição, geração,
                            transmissão e comercialização. Nesse contexto, as geradoras estão fortalecendo
                            seus braços de comercialização com fontes renováveis, uma tendência global.</p>
                        <ul class="major-panorama__ul">
                            <li>
                                <p class="text-dark"> A energia solar no Brasil cresceu mais de 212%, alcançando a
                                    marca de 2,4
                                    GIGAWATT instalados (ANEEL);</p>
                            </li>
                            <li>
                                <p class="text-dark">
                                    O Índice de Commodities do Banco Central (IC-BR), no que se refere a energia,
                                    registrou uma alta de 73,89% no IC-BR em 2021.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-2 d-flex align-items-center pl-5 p-3">
                <div class="home-about span-ha">
                    <div class="ha-title">

                        <p class="mb-3">As fontes de energia limpa são essenciais para diversificar a matriz
                            energética
                            diminuindo o risco de desabastecimento. </p>
                        <ul class="major-panorama__ul">
                            <li>
                                <p class="text-dark"> Quanto mais dependente de um único recurso maior a chance de
                                    falta de energia
                                    e a compra de opções caras de eletricidade; </p>
                            </li>
                            <li>
                                <p class="text-dark">
                                    87% dos investimentos privados são em energias renováveis.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <img class="img-fluid" src={{ asset('template/img/images/torre.png') }} alt="">
            </div>
        </div>
    </section>

    <!-- PRICING TABLE START -->
    <section>
        <div class="mt-5">
            <div class="section-title">
                <h2>Nossos Serviços</h2>
                <p class="text-dark">Nossos profissionais atuam no setor elétrico há mais de 20 anos tendo como<br>
                    foco principal a busca da autonomia energética de empresas, através da geração de Energias
                    Renováveis.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/energetic.svg') }} alt="">
                    <p class="services-card__subtitle">Gestão<br> enegética</p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/auditoria.svg') }} alt="">
                    <p class="services-card__subtitle">Auditoria
                        Energética</p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/consultoria.svg') }} alt="">
                    <p class="services-card__subtitle">Consultoria<br>
                        Energética</p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/consultoria-1.svg') }} alt="">
                    <p class="services-card__subtitle">Consultoria<br>
                        Regulatória</p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/comercial.svg') }} alt="">
                    <p class="services-card__subtitle">Comercialização de Energia</p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/aluguel.svg') }} alt="">
                    <p class="services-card__subtitle">Aluguel de<br> Equipamentos
                        </p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/venda.svg') }} alt="">
                    <p class="services-card__subtitle">Venda de<br> Equipamentos</p>
                </div>
                <div class="col-md-3 services-card d-flex align-items-center flex-column col-lg-2">
                    <img class="services-card__img" src={{ asset('template/img/images/pesquisa.svg') }} alt="">
                    <p class="services-card__subtitle">Pesquisa,
                        Desenvolvimento e
                        Inovação</p>
                </div>
            </div>
        </div>
        <!-- PRICING TABLE END -->


    </section>
    <section class="projects">
        <div class="mt-5 container">
            <div class="section-title">
                <h2 class="text-white">Projetos</h2>
                <p class="text-white">Volteon energia trabalha com sistemas fotovoltaicos, geração de energia segurada e <br>
                    continuada com qualidade, eficiência e livre de combustível fóssil. Nossa principal motivação é a energia limpa e renovável.</p>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-1.png')}} alt="">
            </div>
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-2.png')}} alt="">
            </div>
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-3.png')}} alt="">
            </div>
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-4.png')}} alt="">
            </div>
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-5.png')}} alt="">
            </div>
            <div class="col-lg-4 mt-2">
                <img class="img-fluid" src={{asset('template/img/images/p-6.png')}} alt="">
            </div>
            <div class="col-12 d-flex justify-content-center mt-4">
                <a class="projects-btn__know btn-warning text-white"href="">Saiba mais</a>
            </div>
        </div>
        </div>
        <!-- PRICING TABLE END -->


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
