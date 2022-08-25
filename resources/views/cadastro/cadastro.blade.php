@extends('main')

@section('title', 'Vitrine Tecnológica AITEC/UENP - Cadastro')

@section('content')

    <link rel="stylesheet" type="text/css" href=" app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href=" app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href=" app-assets/css/pages/page-auth.css">

    <div class="app-content content ">
        <div class="content-wrapper">
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">

                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="javascript:void(0);" class="brand-logo">
                                    <h2 class="brand-text text-primary ml-1"><i class="fa-solid fa-user"></i>Cadastro</h2>
                                </a>
                                @if ($errors->all())
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                @endif

                                @if (session('danger'))
                                    <div class="alert alert-danger">{{ session('danger') }}</div>
                                @endif
                                <h4 class="card-title mb-1">Bem-vindo ao Cadastro👋</h4>
                                <p class="card-text mb-2">Por favor, insira seu login e senha</p>

                                <form class="auth-login-form mt-2" action="{{ route('cadastro.auth') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="login-email" class="form-label">Email</label>
                                        <input type="text" class="form-control"
                                            class="@error('email') is-invalid @enderror" id="email" name="email"
                                            placeholder="john@example.com" aria-describedby="email" tabindex="1"
                                            autofocus />
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Senha</label>
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
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nome: </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="john" aria-describedby="name" tabindex="1" autofocus />
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="cpf" class="form-label">CPF: </label>
                                        <input type="number" class="form-control" id="cpf" name="cpf"
                                            placeholder="00000000000" aria-describedby="name" tabindex="1" autofocus />
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="register-privacy-policy"
                                                tabindex="4" />
                                            <label class="custom-control-label" for="register-privacy-policy">
                                                Eu concordo com <a href="javascript:void(0);">privacy policy & terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Login v1 -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
