@extends('home.layouts.app')
@section('title', 'Home')

@section('content')
    <!-- intro section
                                                                                       ================================================== -->
    <section id="intro">

        <div class="intro-overlay"></div>

        <div class="intro-content">
            <div class="row">

                <div class="col-twelve">

                    <h5>PORTFOLIO</h5>
                    <h1>Murillo Lima</h1>

                    <p class="intro-position">
                        <span>Full-stack Developer</span>
                        {{-- <span>UI/UX Designer</span> --}}
                    </p>

                    <a class="button stroke smoothscroll" href="#about" title="Saiba Mais">Saiba Mais</a>

                </div>

            </div>
        </div> <!-- /intro-content -->

        <ul class="intro-social">
            <li>
                <a href="https://github.com/MurilloLima" target="_blank" title="Giihub">
                    <i class="fa fa-1x fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/murillo-lima-b3b764b8/" target="_blank" title="Linkedin">
                    <i class="fa fa-1x fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="" target="_blank" title="Pinterest">
                    <i class="fa fa-1x fa-pinterest"></i>
                </a>
            </li>

        </ul> <!-- /intro-social -->

    </section> <!-- /intro -->


    <!-- about section
                                                                                       ================================================== -->
    <section id="about">

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Sobre</h5>
                <h1>Vou contar um pouco sobre meu trabalho...</h1>

                <div class="intro-info">

                    <img src="{{ asset('assets/home/images/perfil.png') }}" alt="Profile Picture">

                    <p class="lead">Formado em Sistema de informação na faculdade FACIMP, atualmente atuo como
                        freelancer,
                        oferecendo soluções completas para sistemas web, mobile, desktop, e sistemas
                        integrados.</p>
                </div>

            </div>
        </div> <!-- /section-intro -->

        <div class="row about-content">

            <div class="col-six tab-full">

                <h3>Perfil</h3>
                <p>Eu <i class="fa fa-heart"></i> programação, me divirto muito e tomo bastante café durante meus
                    projetos. <i class="fa fa-coffee"></i></p>

                <ul class="info-list">
                    <li>
                        <strong>Nome:</strong>
                        <span>Murillo Lima</span>
                    </li>
                    <li>
                        <strong>Nascimento:</strong>
                        <span>27 de julho de 1989</span>
                    </li>
                    <li>
                        <strong>Cargo:</strong>
                        <span>Freelancer, Full-Stack Developer</span>
                    </li>
                    <li>
                        <strong>Website:</strong>
                        <span>www.murillolimadev.com.br</span>
                    </li>
                    <li>
                        <strong>Email:</strong>
                        <span>contato@live.com</span>
                    </li>

                </ul> <!-- /info-list -->

            </div>

            <div class="col-six tab-full">

                <h3>Skills</h3>
                <p>Minhas especialidades</p>

                <ul class="skill-bars">
                    <li>
                        <div class="progress percent94"><span>94%</span></div>
                        <strong>Front-end</strong>
                    </li>
                    <li>
                        <div class="progress percent95"><span>99%</span></div>
                        <strong>Back-end</strong>
                    </li>
                    <li>
                        <div class="progress percent93">
                            <span>99%</span>
                        </div>
                        <strong>Web</strong>
                    </li>
                    <li>
                        <div class="progress percent99"><span>90%</span></div>
                        <strong>Mobile</strong>
                    </li>
                    <li>
                        <div class="progress percent88"><span>88%</span></div>
                        <strong>Desktop</strong>
                    </li>
                    <li>

                        <div class="progress percent86"><span>76%</span></div>
                        <strong>Design Gráfico</strong>
                    </li>
                    <li>
                        <div class="progress percent90">
                            <span>90%</span>
                        </div>
                        <strong>UI / UX</strong>
                    </li>

                </ul> <!-- /skill-bars -->

            </div>

        </div>

        <div class="row button-section">
            <div class="col-twelve">
                <a href="#contact" title="Entre em contato" class="button stroke smoothscroll">Entre em contato</a>
                <a href="{{ url('download/currículo.pdf') }}" target="_bank" title="Download CV"
                    class="button button-primary" download>Download CV</a>
            </div>
        </div>

    </section> <!-- /process-->


    <!-- resume Section
                                                                                       ================================================== -->
    <section id="resume" class="grey-section">

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Resumo</h5>
                <h1>Minhas qualificações</h1>

                <p class="lead">Um pouco sobre minha tragetória no mundo da programação</p>

            </div>
        </div> <!-- /section-intro-->

        <div class="row resume-timeline">

            <div class="col-twelve resume-header">

                <h2>Experiência Profissional</h2>

            </div> <!-- /resume-header -->

            <div class="col-twelve">

                <div class="timeline-wrap">

                    <div class="timeline-block">

                        <div class="timeline-ico">
                            <i class="fa fa-briefcase"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>Developer</h3>
                            <p>2015 - Presente</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Freelancer</h4>
                            <p>De forma independente, atuo com o desenvolvimento de software de ponta a ponta, desde o
                                levantamento de requisitos com as partes envolvidas no projeto, prototipação,
                                codificação no lado do cliente e servidor, testes, documentação, implementação, até a
                                apresentação para o cliente final, utilizando linguagens fortes no mercado, sempre
                                atualizado e a nível de exigência internacional, trabalhando com metodologias ágeis.</p>
                        </div>

                    </div> <!-- /timeline-block -->

                </div> <!-- /timeline-wrap -->

            </div> <!-- /col-twelve -->

        </div> <!-- /resume-timeline -->

        <div class="row resume-timeline">

            <div class="col-twelve resume-header">
                <h2>Formação</h2>
            </div> <!-- /resume-header -->

            <div class="col-twelve">

                <div class="timeline-wrap">

                    <div class="timeline-block">

                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>FACIMP</h3>
                            <p>Faculdade de Imperatriz FACIMP - Abril 2021</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Sistemas de Informação</h4>
                            <p>Desenvolve, analisa, projeta, implementa e atualiza sistemas de informação. Tem noções de
                                gerenciamento, mas sua especialidade é a criação de sistemas informatizados: programação
                                de computadores e desenvolvimento de softwares para ampliar a capacidade dos recursos do
                                equipamento.</p>
                        </div>

                    </div> <!-- /timeline-block -->

                    {{-- <div class="timeline-block">

                        <div class="timeline-ico">
                            <i class="fa fa-graduation-cap"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>SENAI</h3>
                            <p>Julho 2015 - Junho 2017</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Técnico de Informática</h4>
                            <p>Linguagens de Programação (C, Java, Python, PHP)<br>
                                Programação Orientada a Objetos (Java, PHP)<br>
                                Linguagens Web (HTML5, CSS3, Javascript)<br>
                                Frameworks (JQuery)<br>
                                Desenvolvimento Mobile (Android/Java)<br>
                                Desenvolvimento Desktop (Java/Swing, Java/FX)<br>
                                Banco de dados (Mysql)<br>
                                Fundamentos de Hardware e de Redes<br>
                                Inglês Técnico<br>
                            </p>
                        </div>

                    </div> --}}
                    <!-- /timeline-block -->

                </div> <!-- /timeline-wrap -->

            </div> <!-- /col-twelve -->

        </div> <!-- /resume-timeline -->

        {{-- <div class="row resume-timeline">

            <div class="col-twelve resume-header">

                <h2>Premiações</h2>

            </div> <!-- /resume-header -->

            <div class="col-twelve">

                <div class="timeline-wrap">

                    <div class="timeline-block">

                        <div class="timeline-ico">
                            <i class="fa fa-trophy"></i>
                        </div>

                        <div class="timeline-header">
                            <h3>SP Skills</h3>
                            <p>Dezembro 2017</p>
                        </div>

                        <div class="timeline-content">
                            <h4>Medalha olímpica de prata em Web Design / Development</h4>
                            <p>Com provas a nível de exigência internacional da World Skills 2017, a modalidade envolveu
                                provas Client/Server sides, animação, design e wordpress, disputado entre 5 competidores
                                do estado de São Paulo.</p>
                        </div>

                    </div> <!-- /timeline-block -->

                </div> <!-- /timeline-wrap -->

            </div> <!-- /col-twelve -->

        </div> <!-- /resume-timeline --> --}}


    </section> <!-- /features -->



    <!-- Portfolio Section
                                                                                       ================================================== -->
    <section id="portfolio">

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Portfolio</h5>
                <h1>Confira alguns projetos realizados</h1>

                <p class="lead">Você pode também conferir nas redes sociais aqui disponibilizadas</p>

            </div>
        </div> <!-- /section-intro-->

        <div class="row portfolio-content">

            <div class="col-twelve">

                <!-- portfolio-wrapper -->
                <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/liberty.jpg') }}" alt="Liberty">
                            <a href="#modal-01" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Portfolio</h3>
                                        <span class="folio-types">
                                            Web Design
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/shutterbug.jpg') }}" alt="Shutterbug">
                            <a href="#modal-02" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">MerkadoJá</h3>
                                        <span class="folio-types">
                                            Web Development
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/clouds.jpg') }}" alt="Clouds">
                            <a href="#modal-03" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">MW Studio - App</h3>
                                        <span class="folio-types">
                                            Mobile Development
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/beetle.jpg') }}" alt="Beetle">
                            <a href="#modal-04" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">MW Studio</h3>
                                        <span class="folio-types">
                                            Web Development
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/lighthouse.jpg') }}" alt="Lighthouse">
                            <a href="#modal-05" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">TMG Treinamentos</h3>
                                        <span class="folio-types">
                                            Web Development
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <div class="bgrid folio-item">
                        <div class="item-wrap">
                            <img src="{{ asset('assets/home/images/portfolio/salad.jpg') }}" alt="Salad">
                            <a href="#modal-06" class="overlay">
                                <div class="folio-item-table">
                                    <div class="folio-item-cell">
                                        <h3 class="folio-title">Merkado Já - App</h3>
                                        <span class="folio-types">
                                            Mobile Development
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- /folio-item -->

                    <!-- modal popups - begin -->
                    <div id="modal-01" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/home/images/portfolio/modals/m-liberty.jpg') }}" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>Portfolio</h4>
                            <p>Portfólio próprio para exposição de trabalhos, skills, redes sociais e contato.</p>

                            <div class="categories">Web Design</div>
                        </div>

                        <div class="link-box">
                            <a href="#">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-01 -->

                    <div id="modal-02" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/home/images/portfolio/modals/m-shutterbug.jpg') }}"
                                alt="" />
                        </div>

                        <div class="description-box">
                            <h4>MerkadoJá</h4>
                            <p>Website de divulgação do app - Todos os mercados em um só lugar, e uma forma inovadora de
                                fazer compras.</p>

                            <div class="categories">Web Development</div>
                        </div>

                        <div class="link-box">
                            <a href="">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-02 -->

                    <div id="modal-03" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/home/images/portfolio/modals/m-clouds.jpg') }}" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>MW Studio</h4>
                            <p>App - Produções audio e audiovisual profissionais. Disponível no playstore.</p>

                            <div class="categories">Mobile Development</div>
                        </div>

                        <div class="link-box">
                            <a href="">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-03 -->

                    <div id="modal-04" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/home/images/portfolio/modals/m-beetle.jpg') }}" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>MW Studio</h4>
                            <p>Website de divulgação do app - Produções audio e audiovisual profissionais. Disponível no
                                playstore.</p>

                            <div class="categories">Web Development</div>
                        </div>

                        <div class="link-box">
                            <a href="#">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-04 -->

                    <div id="modal-05" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/home/images/portfolio/modals/m-lighthouse.jpg') }}"
                                alt="" />
                        </div>

                        <div class="description-box">
                            <h4>TMG Treinamentos</h4>
                            <p>Website - Treinanentos em segurança do trabalho, primeiros socorros, cipa, etc.</p>

                            <div class="categories">Web Development</div>
                        </div>

                        <div class="link-box">
                            <a href="">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-05 -->

                    <div id="modal-06" class="popup-modal slider mfp-hide">

                        <div class="media">
                            <img src="{{ asset('assets/site/images/portfolio/modals/m-salad.jpg') }}" alt="" />
                        </div>

                        <div class="description-box">
                            <h4>MerkadoJá</h4>
                            <p>App - Mude a forma de fazer suas compras. Disponível no PlayStore.</p>

                            <div class="categories">Mobile Development</div>
                        </div>

                        <div class="link-box">
                            <a href="">Detalhes</a>
                            <a href="#" class="popup-modal-dismiss">Fechar</a>
                        </div>

                    </div> <!-- /modal-06 -->


                    <!-- modal popups - end
                                                                                     ============================================================= -->

                </div> <!-- /portfolio-wrapper -->

            </div> <!-- /twelve -->

        </div> <!-- /portfolio-content -->

    </section> <!-- /portfolio -->

    <!-- services Section
                                                                                       ================================================== -->
    <section id="services">

        <div class="overlay"></div>

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Serviços</h5>
                <h1>Como posso te ajudar?</h1>

                <p class="lead">Se você precisa de um site, aplicativo, está no lugar certo! </p>

            </div>
        </div> <!-- /section-intro -->

        <div class="row services-content">

            <div id="owl-slider" class="owl-carousel services-list">

                <div class="service">

                    <span class="icon"><i class="fa fa-internet-explorer"></i></span>

                    <div class="service-content">

                        <h3>Sistema Integrado</h3>

                        <p class="desc">Envolve o desenvolvimento multiplataformas, onde dispositivos diferentes se
                            comunicam e trabalham em sincronia através da internet.
                        </p>

                    </div>

                </div> <!-- /service -->



                <div class="service">

                    <span class="icon">
                        <i class="fa fa-tachometer"></i>
                    </span>

                    <div class="service-content">

                        <h3>Aplicação Web</h3>

                        <p class="desc">Desde uma simples landpage, sites pessoais ou comercial, até lojas virtuais e
                            sistemas complexos para internet.
                        </p>

                    </div>

                </div> <!-- /service -->

                <div class="service">

                    <span class="icon"><i class="fa fa-mobile"></i></span>

                    <div class="service-content">

                        <h3>Aplicação Mobile</h3>

                        <p class="desc">Aplicações híbridas ou nativas em multiplataformas para dispositivos móveis
                            com Android ou iOS, disponibilizando em suas respectivas lojas e extraindo o seu instalador.
                        </p>

                    </div>

                </div> <!-- /service -->

                {{-- <div class="service">

                    <span class="icon"><i class="icon-desktop"></i></span>

                    <div class="service-content">

                        <h3>Aplicação Desktop</h3>

                        <p class="desc">
                            Aplicações multiplataformas exclusivas, para sistemas operacionais Windows, Linux e Mac OS,
                            onde o usuário necessita instalar o software em sua máquina.
                        </p>

                    </div>

                </div> <!-- /service -->

                <div class="service">

                    <span class="icon"><i class="icon-image"></i></span>

                    <div class="service-content">

                        <h3>Design Gráfico</h3>

                        <p class="desc">Essencial para o marketing Digital, uma arte gráfica pode fazer toda a
                            diferença para o seu negócio. Panfletos, flyers, convites, banners, avatars, entre outras.
                        </p>

                    </div>

                </div> <!-- /service -->

                <div class="service">

                    <span class="icon"><i class="icon-toggles"></i></span>

                    <div class="service-content">

                        <h3>UI/UX Design</h3>

                        <p class="desc">
                            A experiência do usuário e a análise interativa com a aplicação é um diferencial para as
                            aplicações modernas que focam soluções no ponto de vista do usuário.
                        </p>

                    </div>

                </div> <!-- /service --> --}}

            </div> <!-- /services-list -->

        </div> <!-- /services-content -->

    </section> <!-- /services -->


    <!-- stats Section
                                                                                       ================================================== -->
    <section id="stats" class="count-up">

        <div class="row">
            <div class="col-twelve">

                <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class='fas fa-pencil-ruler'></i>
                        </div>

                        <h3 class="stat-count">
                            122
                        </h3>

                        <h5 class="stat-title">
                            PROJETOS
                        </h5>

                    </div> <!-- /stat -->
                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="fa-solid fa-trophy"></i>
                        </div>

                        <h3 class="stat-count">3</h3>

                        <h5 class="stat-title">
                            PREMIAÇÕES
                        </h5>

                    </div>
                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="fa fa-users"></i>
                        </div>

                        <h3 class="stat-count">
                            28
                        </h3>

                        <h5 class="stat-title">
                            CLIENTES SATISFEITOS
                        </h5>

                    </div> <!-- /stat -->

                    <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="fa-brands fa-react"></i>
                        </div>

                        <h3 class="stat-count">
                            220
                        </h3>

                        <h5 class="stat-title">
                            IDEIAS SURREAIS
                        </h5>

                    </div> <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="fa fa-coffee"></i>
                        </div>

                        <h3 class="stat-count">
                            310
                        </h3>

                        <h5 class="stat-title">
                            COPOS DE CAFÉ
                        </h5>

                    </div> <!-- /stat -->

                    <div class="bgrid stat">

                        <div class="icon-part">
                            <i class="fa fa-clock"></i>
                        </div>

                        <h3 class="stat-count">
                            7200
                        </h3>

                        <h5 class="stat-title">
                            HORAS
                        </h5>

                    </div> <!-- /stat -->

                </div> <!-- /stats-list -->

            </div> <!-- /twelve -->
        </div> <!-- /row -->

    </section> <!-- /stats -->


    <!-- contact
                                                                                       ================================================== -->
    <section id="contact">

        <div class="row section-intro">
            <div class="col-twelve">

                <h5>Contato</h5>
                <h1>Vamos lá?!</h1>

                <p class="lead">Preencha o formulário abaixo para esclarermos suas dúvidas e dar início ao seu
                    projeto!</p>

            </div>
        </div> <!-- /section-intro -->

        <div class="row contact-form">

            <div class="col-twelve">

                <!-- form -->
                <form action="{{ route('home.contact.store') }}" method="post">
                    @csrf
                    @if (session('msg'))
                        <div class="alert alert-success text-center" style="color: yellow">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <fieldset>
                        <div class="form-field">
                            <input name="name" type="text" id="contactName" placeholder="Nome *" value=""
                                minlength="2" required="">
                        </div>
                        <div class="form-field">
                            <input name="email" type="email" id="contactEmail" placeholder="Email *" value=""
                                required="">
                        </div>
                        <div class="form-field">
                            <input name="subject" type="text" id="contactSubject" placeholder="Assunto"
                                value="">
                        </div>
                        <div class="form-field">
                            <textarea name="message" id="contactMessage" placeholder="Mensagem *" rows="10" cols="50"
                                required=""></textarea>
                        </div>
                        <div class="form-field">
                            <button type="submit" class="submitform">Enviar</button>
                            <div id="submit-loader">
                                <div class="text-loader">Enviando...</div>
                                <div class="s-loader">
                                    <div class="bounce1">{{ session('msg') }}</div>
                                    <div class="bounce2">{{ session('msg') }}</div>
                                    <div class="bounce3">{{ session('msg') }}</div>
                                </div>
                            </div>
                        </div>


                    </fieldset>
                </form> <!-- Form End -->

                <!-- contact-warning -->
                <div id="message-warning">
                </div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i>Sua mensagem foi enviada! Obrigado :)<br>
                </div>

            </div> <!-- /col-twelve -->

        </div> <!-- /contact-form -->

        <div class="row contact-info">

            <div class="col-four tab-full">

                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>

                <h5>Localização</h5>

                <p>
                    Imperatriz<br>
                    Maranhão<br>
                    Brasil
                </p>

            </div>

            <div class="col-four tab-full collapse">
                <a href="mailto:jguilhermebp@live.com">
                    <div class="icon">
                        <i class="fa-regular fa-envelope"></i>
                    </div>

                    <h5>Envie um e-mail</h5>
                </a>

                <p>contato@murillolimadev.com.br</p>

            </div>

            <div class="col-four tab-full">
                <a href="tel:+5599991106799">
                    <div class="icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>

                    <h5>Chamada ou WhatsApp</h5>
                </a>

                <p>(+55) 99 99110-6799</p>

            </div>

        </div> <!-- /contact-info -->

    </section> <!-- /contact -->


    <!-- footer ================================================== -->



    <div id="preloader">
        <div id="loader"></div>
    </div>

@endsection
