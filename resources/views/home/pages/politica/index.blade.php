@extends('home.layouts.app')
@section('title', 'Contatos')
@section('content')
    <div class="container pt-120 pb-120">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumnd__wrap text-center">
                    <h1>
                        Vamos começar algo
                    </h1>
                    <ul class="breakcrumnd__cont justify-content-center">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li class="white">
                            /
                        </li>
                        <li class="base">
                            Política de Privacidade
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="contact__section">

        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8 aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="contact__box">
                        <div class="replay__box cmn__bg">
                            <h3>
                                Política de Privacidade
                            </h3>
                            <p>
                                A sua privacidade é importante para nós. Esta política de privacidade descreve como
                                coletamos,
                                usamos e protegemos as informações que você fornece ao usar nosso aplicativo.
                            </p>
                            <p>
                                1. Coleta de Informações
                            </p>
                            <p>
                                Nosso aplicativo web view não coleta informações pessoais identificáveis. No entanto, ao
                                acessar
                                o site, podemos coletar informações anônimas, como: <br>
                                •⁠ ⁠Dados de navegação (endereço IP, tipo de navegador, etc.) <br>
                                •⁠ ⁠Informações de uso (tempo de visita, páginas acessadas)
                            </p>
                            <p>
                                2. Uso das Informações <br>
                                As informações coletadas são utilizadas para: <br>
                                •⁠ ⁠Melhorar a experiência do usuário <br>
                                •⁠ ⁠Analisar o tráfego do site <br>
                                •⁠ ⁠Oferecer conteúdo relevante <br>
                            </p>

                            <p>
                                3. Cookies
                            </p>
                            <p>
                                Nosso site pode usar cookies para melhorar a experiência do usuário. Os cookies são pequenos
                                arquivos armazenados no seu dispositivo. Você pode optar por desativar os cookies nas
                                configurações do seu navegador.
                            </p>

                            <p>
                                4. Compartilhamento de Informações
                            </p>
                            <p>
                                Não vendemos, trocamos ou transferimos suas informações pessoais a terceiros. Podemos
                                compartilhar informações anônimas com parceiros confiáveis para fins de análise.

                            </p>

                            <p>5. Segurança</p>
                            <p>
                                Implementamos medidas de segurança para proteger suas informações. No entanto, lembre-se de
                                que
                                nenhuma transmissão de dados pela internet é 100% segura.

                            </p>


                            <p>6. Alterações nesta Política</p>
                            <p>
                                Podemos atualizar esta política de privacidade ocasionalmente. Qualquer alteração será
                                publicada
                                nesta página com a data da última atualização.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                    <div class="contact__rightside cmn__bg">
                        <h4 class="mb-30">
                            Sinta-se a vontade para entrar em contato comigo a qualquer hora
                        </h4>
                        <div class="contact__item mb-20">
                            <span class="he1">
                                E-mail
                            </span>
                            <a href="contact.html#0" style="text-transform: none;">
                                <span class="__cf_email__"
                                    data-cfemail="375356415e535a56435e564404040477505a565e5b1954585a">contato@murillolimadev.com.br</span>
                            </a>
                        </div>
                        <div class="contact__item mb-20">
                            <span class="he1">
                                Telefone/Whatsapp
                            </span>
                            <a href="https://web.whatsapp.com/send?phone=5599991106799" target="_blank">
                                +(55) 99 99110-6799
                            </a>
                        </div>
                        <div class="contact__item">
                            <span class="he1">
                                Endereço
                            </span>
                            <span class="address">
                                Centro - Estreito-MA
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
