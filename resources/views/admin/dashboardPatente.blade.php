@extends('main')

@section('title', 'Vitrine Tecnológica AITEC/UENP - Admin')

@section('content')
    @can('usuario')
        <h1>Não possui permissão de administrador para está página.</h1>
    @endcan

    @canany(['admin-geral', 'admin-patente'])
        <div class="app-content content ">
            <div class="content-wrapper">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-left mb-0">Dashboard Patentes</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/vitrine">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard Patentes
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('msg'))
                    <h1>{{ session('msg') }}</h1>
                @endif
                <section id="knowledge-base-search">
                    <div class="row">
                        <div class="col-12">
                            <div class="card knowledge-base-bg text-center"
                                style="background-image: url('app-assets/images/banner/banner.png')">
                                <div class="card-body">
                                    <h2 class="text-primary">Busque uma patente</h2>
                                    <form class="kb-search-input">
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="14" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65">
                                                        </line>
                                                    </svg></span>
                                            </div>
                                            <input type="text" class="form-control" id="searchbar"
                                                placeholder="Nome da patente">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="content-body">
                    <section id="knowledge-base-content">
                        <div class="row kb-search-content-info match-height" style="justify-content: center;">
                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="/formulario-patente">
                                        <img src="app-assets/images/illustration/api.svg" class="card-img-top"
                                            alt="knowledge-base-image">
                                        <div class="card-body text-center">
                                            <h4>Criação de Patentes</h4>
                                            <p class="text-body mt-1 mb-0">Formulário para criação de patentes novas.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="/dashboard-patentes-editar">
                                        <img src="app-assets/images/illustration/personalization.svg" class="card-img-top"
                                            alt="knowledge-base-image">
                                        <div class="card-body text-center">
                                            <h4>Editar Patentes</h4>
                                            <p class="text-body mt-1 mb-0">Editar patentes já cadastradas.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-12 kb-search-content">
                                <div class="card">
                                    <a href="/dashboard-patentes-deletar">
                                        <img src="app-assets/images/illustration/email.svg" class="card-img-top"
                                            alt="knowledge-base-image">
                                        <div class="card-body text-center">
                                            <h4>Deletar Patentes</h4>
                                            <p class="text-body mt-1 mb-0">Excluir patentes já cadastradas.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endcanany

@endsection
