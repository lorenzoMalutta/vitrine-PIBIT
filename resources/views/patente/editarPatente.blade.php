@extends('main')

@section('title', 'Vitrine Tecnológica AITEC/UENP - Admin')

@section('content')
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
                                        <li class="breadcrumb-item"><a href="/dashboard-patentes">Dashboard Patentes</a>
                                        </li>
                                        <li class="breadcrumb-item active">Dashboard Editar Patentes
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('msg'))
                <h1>{{ session('msg') }}</h1>
            @endif
            <div class="row" id="table-bordered">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tabela de Patentes</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nome:</th>
                                        <th>Autores:</th>
                                        <th>INPI:</th>
                                        <th>Área:</th>
                                        <th>TRL:</th>
                                        <th>Editar:</th>
                                    </tr>
                                </thead>
                                @foreach ($patente as $item)
                                    <tbody>
                                        <tr>
                                            <td>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-file-text">
                                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                    <polyline points="14 2 14 8 20 8"></polyline>
                                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                                    <polyline points="10 9 9 9 8 9"></polyline>
                                                </svg>
                                                <span class="font-weight-bold">{{ $item->nomeTecnologia }}</span>
                                            </td>
                                            <td>{{ $item->criadores }}</td>
                                            <td>
                                                <span class="font-weight-bold">{{ $item->inpi }}</span>
                                            </td>
                                            <td><span class="badge badge-pill badge-light-info mr-1">{{ $item->area }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-pill badge-light-info mr-1">{{ $item->trl }}</span>
                                            </td>
                                            <td>
                                                @foreach ($midia as $midias)
                                                    <a
                                                        href="/dashboard-patentes-editar-editando-{{ $item->id }}-{{ $midias->idPatente }}"><button
                                                            type="buttom"
                                                            class="btn btn-primary waves-effect waves-float waves-light">Editar</button></a>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcanany
@endsection
