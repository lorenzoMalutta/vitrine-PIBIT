@extends('main')

@section('title', 'Tecnologia AITEC/UENP')

@section('content')

    <div class="app-content content ">
        <div class="sidebar-detached sidebar-left">
            <div class="sidebar">
                <!-- Ecommerce Sidebar Starts -->
                <div class="sidebar-shop">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="filter-heading d-none d-lg-block">Filtros</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="brands">
                                <h6 class="filter-title">Situação no INPI</h6>
                                <ul class="list-unstyled brand-list">
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand1" />
                                            <label class="form-check-label" for="productBrand1">Pedido em sigilo</label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand2" checked />
                                            <label class="form-check-label" for="productBrand2">Pedido depositado</label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand3" />
                                            <label class="form-check-label" for="productBrand3">Patente concedida</label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand4" />
                                            <label class="form-check-label" for="productBrand4">Registro concedido</label>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand5" checked />
                                            <label class="form-check-label" for="productBrand5">Domínio público</label>
                                        </div>
                                </ul>
                            </div>
                            <!-- Price Filter ends -->

                            <!-- Price Range ends -->

                            <!-- Categories Starts -->
                            <div id="product-categories">
                                <h6 class="filter-title">Categorias</h6>
                                <ul class="list-unstyled categories-list">
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category1" name="category-filter"
                                                class="custom-control-input" checked />
                                            <label class="custom-control-label" for="category1">Todas</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category2" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category2">Química</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category3" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category3">Medicina</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category4" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category4">Saúde Animal</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category5" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category5">Biotecnologia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category6" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category6">Nutrição</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category7" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category7">Tecnologia Assistiva</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category8" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category8">Engenharia Civil</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category9" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category9">Eletrônica </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category10" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category10">Tecnologia
                                                Ambiental</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="category11" name="category-filter"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="category11">Agronomia</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Vitrine Tecnológica</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Vitrine Tecnologica</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                    </div>
                </div>
            </div>
            <!-- Blog List -->
            <div class="blog-list-wrapper">
                <!-- Blog List Items -->
                <!-- Patentes -->
                <div class="row">
                    @foreach ($patente as $patentes)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                @foreach ($midia as $midias)
                                    @if ($patentes->id == $midias->idPatente)
                                        <a href="tecnologias-patente-{{ $patentes->id }}"><img class="card-img-top"
                                                src="{{ asset('storage/' . $midias->image) }}"
                                                style="whidth: 150px; height: 150px" alt="imagem da patente" /></a>
                                    @endif
                                @endforeach
                                <div class="card-body">
                                    <h4 class="card-title">{{ $patentes->nomeTecnologia }}</h4>
                                    <div class="media">
                                        <div class="media-body">
                                            <small class="text-muted mr-25">| {{ $patentes->tipoPatente }}</small>
                                            <small class="text-muted mr-25">| {{ $patentes->categoria }}</small>
                                            <span class="text-muted ml-50 mr-25">|</span>
                                            <small class="text-muted">{{ $patentes->criacao }}</small>
                                        </div>
                                    </div>
                                    <div class="my-1 py-25">
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-info mr-50">{{ $patentes->area }}
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);">
                                            <div class="badge badge-pill badge-light-primary">
                                                {{ $patentes->setorEconomico }}</div>
                                        </a>
                                    </div>
                                    <p class="card-text">
                                        {{ $patentes->sinopse }}
                                    </p>
                                    <a href="tecnologias-patente-{{ $patentes->id }}-{{ $midias->idPatente }}"
                                        class="btn btn-outline-primary">Leia mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--/ Blog List Items -->
                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-2">
                                <li class="page-item prev-item"><a class="page-link" href="javascript:void(0);"></a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item active" aria-current="page"><a class="page-link"
                                        href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">6</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">7</a></li>
                                <li class="page-item next-item"><a class="page-link" href="javascript:void(0);"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--/ Pagination -->
            </div>
        </div>
    </div>
    </div>
    <!-- END: Content-->

@endsection
