<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITLE -->
    <title>Volteon</title>

    <!-- META TAGS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href={{ asset('template/css/slick.min.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/custom.css') }}>
    <link rel="stylesheet" href={{ asset('template/css/responsive.css') }}>


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
            <div class="col-lg-4 content-box" style="background-image: url('../../template/img/images/torres-1.png')">
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
            <div class="col-lg-4 content-box" style="background-image: url('../../template/img/images/placas.png')">
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
                    <div class="d-flex align-items-center about-grid__icons">
                        <img src={{ asset('template/img/images/engineer.svg') }} alt="Logo engenheiro">
                        <p class="text-dark strong pl-2">Engenheiros qualificados</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center about-grid__icons">
                        <img width="59" height="59" src={{ asset('template/img/images/shield.svg') }}
                            alt="Logo Segurança">
                        <p class="text-dark strong pl-2">Segurança</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center about-grid__icons">
                        <img width="59" height="59" src={{ asset('template/img/images/innovation.svg') }}
                            alt="Logo Inovação">
                        <p class="text-dark strong pl-2">Inovação</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- HOME ABOUT END -->

    <section id="about">
        <div class="row">
            <div class="col-lg-6 p-0">
                <img class="img-fluid" src={{ asset('template/img/images/eletro.png') }} alt="">
            </div>
            <div class="col-lg-6 mt-2 major-panorama__first px-5 pt-3">
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

            <div class="col-lg-6 mt-2 d-flex align-items-center major-panorama__second px-5 p-3">
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
    <section id="services" class="mb-5">
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
                    <p class="services-card__subtitle">Gestão<br> de Energia Renovável</p>
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
    <section id="projects">
        <div class="mt-5 container">
            <div class="section-title">
                <h2 class="text-white">Projetos</h2>
                <p class="text-white">Volteon energia trabalha com sistemas fotovoltaicos, geração de energia
                    segurada e <br>
                    continuada com qualidade, eficiência e livre de combustível fóssil. Nossa principal motivação é a
                    energia limpa e renovável.</p>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-1.png') }} alt="">
                </div>
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-2.png') }} alt="">
                </div>
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-3.png') }} alt="">
                </div>
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-4.png') }} alt="">
                </div>
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-5.png') }} alt="">
                </div>
                <div class="col-lg-4 mt-2">
                    <img class="img-fluid" src={{ asset('template/img/images/p-6.png') }} alt="">
                </div>
                <div class="col-12 d-flex justify-content-center mt-4">
                    <a class="projects-btn__know btn-warning text-white" href="https://www.instagram.com/volteonenergia/" target="_blank">Saiba mais</a>
                </div>
            </div>
        </div>
        <!-- PRICING TABLE END -->


    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="home-about span-ha section-team__title mt-5">
                        <div class="ha-title mb-0">
                            <h5>Volteon energia</h5>
                        </div>
                        <h3 class="strong text-dark">
                            Nossa equipe possui centenas de
                            projetos implementados de geração
                            de energia e eficiência energética,
                        </h3>
                    </div>
                    <p class="my-4" style="font-style: italic;">
                        Temos uma visão de futuro para ser referência no mercado da energia,
                        por meio do incentivo à pesquisa, ensino e a descoberta de novas práticas
                        inovadoras para a matriz energética.
                    </p>
                    <p>
                        Acreditamos na sustentabilidade como caminho para atuação consciente
                        em relação aos recursos naturais. A Volteon viabiliza em média 65 mil
                        toneladas de CO2 retiradas do meio ambiente, consequentemente,
                        promove a preservação ambiental do nosso País e gera selos ambientais
                        para as empresas beneficiadas pela energia e exportadoras.

                    </p>
                </div>
                <div class="col-lg-6">
                    <img src={{ asset('template/img/images/business.png') }} alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="contact-card row">
                <div class="col-lg-6 mr-1 contact-card__text">
                    <div class="home-about span-ha contact-card__title">
                        <div class="ha-title mb-0">
                            <h5>Contato</h5>
                        </div>
                        <h3 class="strong text-dark" style="    font-size: 87%;">
                            Ficou com dúvidas? 
                        </h3>
                        <p class="text-dark">Preencha os campos ao lado
                            que um especialista entrará em contato com você!</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="contact-card__mainsub">Temos uma equipe de profissionais especializados no assunto
                        prontos para esclarecer quaisquer dúvidas e te atender com a qualidade que você merece.</p>
                </div>
                <div class="card contact-card__form">
                    <div class="card-header">
                        <img src={{ asset('template/img/images/logo-lg.svg') }} alt="">
                    </div>
                    <div class="card-body">
                        <form action="/" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between">
                                <input class="contact-card__input" name="nameInput" type="text" placeholder="Nome">
                                <input class="contact-card__input" name="emailInput" type="email" placeholder="E-mail">
                            </div>
                            <textarea class="contact-card__textarea" placeholder="Sua mensagem" name="mensagemInput" id="" cols="30" rows="5"></textarea>
                            <div class="d-flex justify-content-center">
                                <button class="contact-card__submit">
                                    Enviar
                                </button>
                            </div>
                            <p class="text-dark contact-card__subtitle">responderemos sua mensagem o mais rápido
                                possível.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="states">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Endereços</h2>
                <p class="text-dark">Nossos profissionais atuam no setor elétrico há mais de 20 anos tendo
                    como<br>
                    foco principal a busca da autonomia energética de empresas, através da geração de Energias
                    Renováveis.</p>
            </div>
            <div class="countries">
                <div class="div1 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/pr.svg') }} alt="">
                    <strong>PR</strong>
                    <p>Avenida Anita Garibaldi,<br>
                        850 Torre 03, Sala 810<br>
                        Curitiba/PR
                    </p>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div2 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/ma.svg') }} alt="">
                    <strong>MA</strong>
                    <p>Rua dos Acapus, 23 QD,<br>
                        Renascença I<br>
                        São Luís/MA
                    </p>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div3 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/go.svg') }} alt="">
                    <strong>go</strong>
                    <p>Avenida Jamel Cecilio,
                        Quadra B-27, S/N,
                        Goiânia/GO
                    </p>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div4 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/sc.svg') }} alt="">
                    <strong>sc</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div5 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/mt.svg') }} alt="">
                    <strong>mt</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div6 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/mg.svg') }} alt="">
                    <strong>mg</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div7 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/ro.svg') }} alt="">
                    <strong>ro</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div8 countries-div__item">

                    <img height="43,72" width="61,6" src={{ asset('template/img/images/pe.svg') }} alt="">
                    <strong>pe</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div9 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/sp.svg') }} alt="">
                    <strong>sp</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
                <div class="div10 countries-div__item">
                    <img height="43,72" width="61,6" src={{ asset('template/img/images/ms.svg') }} alt="">
                    <strong>ms</strong>
                    <strong class="soon">
                        Em breve
                    </strong>
              <a href="#contact">
                        <img src={{ asset('template/img/images/msg.svg') }} alt="">
              </a>
                </div>
            </div>
        </div>
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
