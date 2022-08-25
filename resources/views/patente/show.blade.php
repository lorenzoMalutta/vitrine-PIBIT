@extends('main')

@section('title', $patente->nomeTecnologia)

@section('content')
    <div class="app-content content ">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ $patente->nomeTecnologia }}</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/tecnologias">Vitrine Tecnologica</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">{{ $patente->nomeTecnologia }}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body">
                    <!-- Blog Detail -->
                    <div class="blog-detail-wrapper">
                        <div class="row">
                            <!-- Blog -->
                            <div class="col-12">
                                <div class="card">
                                    <div class="video-player" id="plyr-video-player">
                                        <iframe src="{{ asset('storage/' . $midia->video) }}" allowfullscreen allow="autoplay"
                                            style="width: 100%; height: 400px;"></iframe>
                                    </div>
                                    <!--<img src="image/sapata-img.jpg" class="img-fluid card-img-top" alt="Blog Detail Pic" /> -->
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <small class="text-muted mr-25">Criadores</small>
                                                <small><a href="javascript:void(0);"
                                                        class="text-body">{{ $patente->criadores }}
                                                    </a></small>
                                                <span class="text-muted ml-50 mr-25">|</span>
                                                <small class="text-muted">{{ $patente->criacao }}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="my-1 py-25">
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">{{ $patente->area }}
                                                </div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-danger mr-50">
                                                    {{ $patente->categoria }}</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary mr-50">
                                                    {{ $patente->tipoPatente }}</div>
                                            </a>
                                            <a href="javascript:void(0);">
                                                <div class="badge badge-pill badge-light-primary mr-50">
                                                    {{ $patente->setorEconomico }}</div>
                                            </a>
                                        </div>
                                        <h4 class="card-title">Número do processo do INPI</h4>
                                        <p class="card-text mb-2">
                                            Patente concedida pelo INPI sob n° do pedido {{ $patente->inpi }}.
                                        </p>
                                        <h4 class="card-title">Resumo da Tecnologia</h4>
                                        <p class="card-text mb-2">
                                            {{ $patente->resumo }}
                                        </p>
                                        <h4 class="card-title">Problema que soluciona</h4>
                                        <p class="card-text mb-2">
                                            {{ $patente->solucaoProblema }}
                                        </p>
                                        <h4 class="card-title">Principais vantagens</h4>
                                        <p class="card-text mb-2">
                                            {{ $patente->vantagem }}
                                        </p>
                                        <h4 class="card-title">Aplicação da Tecnologia</h4>
                                        <p class="card-text mb-2">
                                            {{ $patente->aplicacao }}
                                        </p>
                                        <h4 class="card-title">TRL</h4>
                                        <img src="app-assets/media-custom/photos/tabela-trl.png" alt="tabela trl">
                                        <P class="card-text mb-2">{{ $patente->trl }}</P>
                                        <p class="card-text mb-2"></p>
                                        <!-- Pause Option starts -->
                                        <div class="col-md-6 col-sm-12">
                                            <div class="card">
                                                <h4 class="card-title">Galeria de Imagens</h4>
                                                <div class="card-body">
                                                    <div id="carousel-pause" class="carousel slide" data-bs-ride="carousel"
                                                        data-pause="hover">
                                                        <ol class="carousel-indicators">
                                                            <li data-bs-target="#carousel-pause" data-bs-slide-to="0"
                                                                class="active"></li>
                                                            <li data-bs-target="#carousel-pause" data-bs-slide-to="1"></li>
                                                            <li data-bs-target="#carousel-pause" data-bs-slide-to="2"></li>
                                                        </ol>

                                                        <div class="carousel-inner" role="listbox">
                                                            <div class="carousel-item active">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('storage/' . $midia->image) }}"
                                                                    alt="First slide" />
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="img-fluid"
                                                                    src="app-assets/media-custom/photos/3-Ilustracao.png"
                                                                    alt="Second slide" />
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="img-fluid"
                                                                    src="app-assets/media-custom/photos/sapata-01.jpg"
                                                                    alt="Third slide" />
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carousel-pause"
                                                            role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carousel-pause"
                                                            role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pause Option ends -->
                                        <h4 class="mb-75">Informações de contato</h4>
                                        <ul class="p-0 mb-2">
                                            <li class="d-block">
                                                <span class="mr-25">-</span>
                                                <span>Email: {{ $patente->email }}</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="mr-25">-</span>
                                                <span>Telefone: {{ $patente->telefone }}</span>
                                            </li>
                                            <li class="d-block">
                                                <span class="mr-25">-</span>
                                                <span>{{ $patente->link }}</span>
                                            </li>
                                        </ul>
                                        <hr class="my-2" />
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="dropdown blog-detail-share">
                                                <i data-feather="share-2" class="font-medium-5 text-body cursor-pointer"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                        <i data-feather="github" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                        <i data-feather="gitlab" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                        <i data-feather="facebook" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                        <i data-feather="twitter" class="font-medium-3"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item py-50 px-1">
                                                        <i data-feather="linkedin" class="font-medium-3"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-detached sidebar-right">
                <div class="sidebar">
                    <div class="blog-sidebar my-2 my-lg-0">
                        <!-- Recent Posts -->
                        <div class="blog-search">
                            <h4 class="card-title">Folder Digital da tecnologia</h4>
                            <div class="media mb-2">
                                <a href="{{ asset('storage/' . $midia->pdf) }}" class="mr-2" target="_blank">
                                    <img class="rounded" src="app-assets/media-custom/photos/logo-pdf.png" width="100"
                                        height="70" alt="Recent Post Pic" />
                                </a>
                                <div class="media-body">
                                    <h6 class="blog-recent-post-title">
                                        <a href="{{ asset('storage/' . $midia->image) }}" class="text-body-heading"
                                            target="_blank"></a>
                                    </h6>
                                    <div class="text-muted mb-0">{{ $patente->criacao }} </div>
                                </div>
                            </div>
                            <h4 class="card-title">Arquivos Úteis</h4>
                            <div class="mt-75">
                                <div class="media mb-2">
                                    <a href="#" class="mr-2">
                                        <img class="rounded" src="app-assets/media-custom/photos/sapata-03.png"
                                            width="100" height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="#" class="text-body-heading">Pesquisa relacionada</a>
                                        </h6>
                                        <div class="text-muted mb-0">Mar 04 2022</div>
                                    </div>
                                </div>
                                <div class="media mb-2">
                                    <a href="#" class="mr-2">
                                        <img class="rounded" src="app-assets/images/banner/imagem01.jpg" width="100"
                                            height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="#" class="text-body-heading">Pesquisa na mesma área</a>
                                        </h6>
                                        <div class="text-muted mb-0">Feb 18 2020</div>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="mr-2">
                                        <img class="rounded" src="app-assets/images/banner/imagem03.jpg" width="100"
                                            height="70" alt="Recent Post Pic" />
                                    </a>
                                    <div class="media-body">
                                        <h6 class="blog-recent-post-title">
                                            <a href="#" class="text-body-heading">Produto manufaturado</a>
                                        </h6>
                                        <div class="text-muted mb-0">Out 08 2020</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Recent Posts -->

                        <!-- Categories -->
                        <div class="blog-categories mt-3">
                            <h4 class="card-title">Palavras-chave</h4>
                            <div class="mt-1">
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">sapata</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Esteira sem-fim</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Máquinas de grande porte</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Desgaste de sapata</div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-start align-items-center mb-75">
                                    <a href="javascript:void(0);" class="mr-75">
                                        <div class="avatar bg-light-info rounded">
                                            <div class="avatar-content">
                                                <i data-feather="hash" class="avatar-icon font-medium-1"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);">
                                        <div class="blog-category-title text-body">Novo método de fabricação de sapata
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--/ Categories -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
