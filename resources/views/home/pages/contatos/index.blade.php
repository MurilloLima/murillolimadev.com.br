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
                            Vamos começar algo
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
                                Deixe sua pergunta
                            </h3>

                            @if ($errors->any())
                                <div class="alert text-center"
                                    style="margin: 10px;">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="text-align: center">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('msg'))
                                <div class="row text-center">
                                    <div class="col-md-12" \>
                                        <div class="alert alert-success text-center" style="background-color: var(--base)">
                                            {{ session('msg') }}
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('home.contact.store') }}" method="post" class="row g-4">
                                @csrf
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="Nome">
                                </div>

                                <div class="col-lg-12">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" name="subject" placeholder="Assunto">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="content" rows="5" placeholder="Mensagem"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" value="Enviar mensagem" name="store"
                                        class=" border-0 d-flex fw-500 cmn--btn align-items-center gap-2">
                                        <span class="get__text">
                                            Enviar mensagem
                                        </span>
                                        <span>
                                            <i class="bi bi-arrow-right fz-20"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
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
