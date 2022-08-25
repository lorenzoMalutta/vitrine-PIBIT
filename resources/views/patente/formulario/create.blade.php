@extends('main')

@section('title', 'Patente AITEC/UENP')

@section('content')

    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-invoice.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/form-file-uploader.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/horizontal-menu.css">

    @canany(['admin-geral', 'admin-patente'])
        <div class="app-content content ">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">Configuração da página</h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/vitrine">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#">Admin</a>
                                        </li>
                                        <li class="breadcrumb-item active">Tecnologia
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('formulario.create') }} " method="post" enctype="multipart/form-data">
                @csrf
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nome da tecnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input type="text" name="nomeTecnologia" id="nomeTecnologia"
                                                    class="@error('title') is-invalid @enderror">
                                                @error('nomeTecnologia')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Área econômica</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible"
                                                    name="setorEconomico" id="setorEconomico">
                                                    @foreach ($economico as $item)
                                                        <option value="{{ $item->denominacao }}"> {{ $item->denominacao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Área do conhecimento</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible" name="area"
                                                    id="area">
                                                    @foreach ($conhecimento as $item)
                                                        <option value="{{ $item->denominacao }}"> {{ $item->denominacao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Área científica</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible"
                                                    name="categoria" id="categoria">
                                                    @foreach ($cientifica as $item)
                                                        <option value="{{ $item->denominacao }}"> {{ $item->denominacao }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Sinopse da patente</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea minlength="100" class="form-control char-textarea" id="textarea-counter" rows="3"
                                                    placeholder="Counter" style="height: 100px" id="sinopsePatente" name="sinopsePatente"
                                                    class="@error('sinopsePatente') is-invalid @enderror"></textarea>
                                                <label for="textarea-counter">mínimo de 100 caracteres e máximo de 250</label>

                                                @error('sinopsePatente')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tipo de patente</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible"
                                                    name="tipoPatente" id="tipoPatente">
                                                    <option value="Patente concedida">Patente concedida</option>
                                                    <option value="Patente verde">Patente verde</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Número do PCT</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="@error('pct') is-invalid @enderror" class="position-relative"
                                                data-select2-id="45">
                                                <input type="number" id="pct" name="pct">
                                            </div>

                                            @error('pct')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tipo da Tecnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible"
                                                    name="tipoTecnologia" id="tipoTecnologia">
                                                    <option value="1">Invenção de utilidade</option>
                                                    <option value="0">Invenção de modelo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Número do INPI</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input class="@error('inpi') is-invalid @enderror" type="number"
                                                    id="inpi" name="inpi">

                                                @error('inpi')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Resumo</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea minlength="250" class="form-control char-textarea" id="textarea-counter" rows="3"
                                                    placeholder="Counter" style="height: 100px" id="resumo" name="resumo"
                                                    class="@error('resumo') is-invalid @enderror"></textarea>
                                                <label for="textarea-counter">mínimo de 250 caracteres</label>

                                                @error('resumo')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Problema que soluciona</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea minlength="250" class="form-control char-textarea" id="textarea-counter" rows="3"
                                                    placeholder="Counter" style="height: 100px" id="solucaoProblema" name="solucaoProblema"
                                                    class="@error('solucaoProblema') is-invalid @enderror"></textarea>
                                                <label for="textarea-counter">mínimo de 250 caracteres</label>

                                                @error('solucaoProblema')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vantagem da técnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea minlength="250" class="form-control char-textarea" id="textarea-counter" rows="3"
                                                    placeholder="Counter" style="height: 100px" id="vantagem" name="vantagem"
                                                    class="@error('vantagem') is-invalid @enderror"></textarea>

                                                @error('vantagem')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <label for="textarea-counter">mínimo de 250 caracteres em tópicos</label>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Aplicação da técnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea minlength="50" class="form-control char-textarea" id="textarea-counter" rows="3"
                                                    placeholder="Counter" style="height: 100px" id="aplicacao" name="aplicacao"
                                                    class="@error('aplicacao') is-invalid @enderror"></textarea>

                                                @error('apicacao')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                <label for="textarea-counter">mínimo de 250 caracteres</label>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">TRL da técnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45"><select
                                                    class="select2-size-lg form-select select2-hidden-accessible"
                                                    name="trl" id="trl">
                                                    <option value="1">1 – Princípios básicos observados e relatados
                                                    </option>
                                                    <option value="2">2 – Conceito e/ou aplicação da tecnologia formulados
                                                    </option>
                                                    <option value="3">3 – Prova de conceito analítica e experimental de
                                                        características e/ou funções críticas</option>
                                                    <option value="4">4 – Verificação funcional de componente e/ou
                                                        subsistema em ambiente laboratorial</option>
                                                    <option value="5">5 – Verificação da função crítica do componente e/ou
                                                        subsistema em ambiente relevante</option>
                                                    <option value="6">6 – Demonstração do modelo de protótipo de
                                                        sistema/subsistema em ambiente relevante</option>
                                                    <option value="7">7 – Demonstração do protótipo de sistema/subsistema
                                                        em ambiente operacional</option>
                                                    <option value="8">8 – Sistema real desenvolvido e aprovado</option>
                                                    <option value="9">9 – Sistema real desenvolvido e aprovado através de
                                                        operações bem-sucedidas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Número do telefone</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input class="@error('telefone') is-invalid @enderror" type="number"
                                                    id="telefone" name="telefone">

                                                @error('telefone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Email</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input class="@error('email') is-invalid @enderror" type="email"
                                                    name="email" id="email">

                                                @error('email')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Link para coteúdo extra:</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input class="@error('link') is-invalid @enderror" type="text"
                                                    name="link" id="link">

                                                @error('link')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="counter-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Nome dos criadores</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-floating mb-0">
                                                <textarea class="form-control char-textarea" id="textarea-counter" rows="3" placeholder="Counter"
                                                    style="height: 100px" id="criadores" name="criadores" class="@error('criadores') is-invalid @enderror"></textarea>

                                                @error('criadores')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <label for="textarea-counter">Criadores...</label>
                                            </div>
                                            <small class="textarea-counter-value float-end"><span
                                                    class="char-count">0</span></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data de criação da técnologia</h4>
                                </div>
                                <div class="card-body">
                                    <div class="col-12" data-select2-id="2">
                                        <div class="mb-1" data-select2-id="1">
                                            <div class="position-relative" data-select2-id="45">
                                                <input class="@error('date') is-invalid @enderror" type="date"
                                                    name="criacao" id="criacao">

                                                @error('criadores')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Video</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Faça o upload do video
                                </p>
                                <input class="@error('video') is-invalid @enderror" type="file" name="video"
                                    id="video">

                                @error('video')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Imagens</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Faça o upload das imagens
                                </p>
                                <input class="@error('image') is-invalid @enderror" type="file" name="image"
                                    id="image">

                                @error('image')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pdf</h4>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Faça o upload do pdf
                                </p>

                                <input class="@error('pdf') is-invalid @enderror" type="file" accept="application/pdf"
                                    name="pdf" id="pdf">
                                @error('pdf')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Enviar">
            </form>
        </div>
    @endcanany
@endsection
