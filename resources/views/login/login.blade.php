@extends('main')

@section('title', 'Vitrine Tecnológica AITEC/UENP - Login')

@section('content')

    <link rel="stylesheet" type="text/css" href=" app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href=" app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href=" app-assets/css/pages/page-auth.css">

    <div class="app-content content ">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login v1 -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <h2 class="brand-text text-primary ml-1"><i class="fa-solid fa-user"></i>Login</h2>
                                </a>
                                @if ($errors->all())
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                @endif

                                @if (session('danger'))
                                    <div class="alert alert-danger">{{ session('danger') }}</div>
                                @endif

                                @if (session('msg'))
                                    <div class="alert">{{ session('msg') }}</div>
                                @endif
                                <h4 class="card-title mb-1">Bem-vindo ao Login👋</h4>
                                <p class="card-text mb-2">Por favor, insira seu login e senha</p>

                                <form class="auth-login-form mt-2" action="{{ route('login.auth') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="login-email" class="form-label">Email</label>
                                        <input type="text" class="form-control"
                                            class="@error('email') is-invalid @enderror" id="email" name="email"
                                            placeholder="john@example.com" aria-describedby="email" tabindex="1"
                                            autofocus />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Senha</label>
                                            <a href="#">
                                                <small>Esqueceu a senha?</small>
                                            </a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                name="password" tabindex="2"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="login-password" />
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><i
                                                        data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Logar</button>
                                    <br>
                                </form>

                                <p class="text-center mt-2">
                                    <span>Novo na plataforma?</span>
                                    <a href="/cadastro">
                                        <span>Criar um conta</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
