@extends('layouts.app', ['page' => __('Notifications'), 'pageSlug' => 'notifications'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                <a href="#"><i class="far fa-2x mx-2 fa-envelope"></i></a>
                <a href="#"><i class="far fa-2x mx-2 fa-comment-alt"></i></a>
                <a href="#"><i class="far fa-2x mx-2 fa-check-square"></i></a>
                <a href="#"><i class="far fa-2x mx-2 fa-calendar"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-transparent">
                    <h4>Resultados | </h4>
                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                    <i class="tim-icons icon-double-right"></i>
                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">

        <div class="col-3">
            <h3>Filtros</h3>
            <div class="card card-chart">
                <div class="card-header ">

                    <div class="text-left">
                        <h2 class="card-title">Performance</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="text-left">
                            <h4 class="card-title">Preços</h4>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                       value="option1">
                                R$10
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2" checked>
                                R$10-R$100
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2" checked>
                                R$100-R$500
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2" checked>
                                R$500
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                       value="option2" checked>
                                Todos
                                <span class="form-check-sign"></span>
                            </label>
                        </div>

                        <div class="card">
                            <div class="card-body">


                                <div class="row">
                                    <div class="col-6"><h4 class="card-title">Valores</h4></div>
                                    <div class="col-6"><h4 class="text-right">1000</h4></div>
                                    <div class="col-12">
                                        <input type="range" id="vol" name="vol" min="10" max="5000"
                                               style="width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                    <h4 class="card-title">Categoria</h4>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Abigail
                                        <span class="form-check-sign">
                                  <span class="check"></span>
                              </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Carlos
                                        <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Gustavo
                                        <span class="form-check-sign">
                                <span class="check"></span>
                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="text-left">
                                    <h4 class="card-title">Avaliação</h4>
                                </div>
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-6 my-2">
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x"></span>
                                        <span class="fa fa-star fa-1x"></span>
                                    </div>
                                    <div class="col-6 my-2 text-right">
                                        <span>1800</span>
                                    </div>

                                    <div class="col-6 my-2">
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x"></span>
                                        <span class="fa fa-star fa-1x" style="color: #dfdfdf;"></span>
                                    </div>
                                    <div class="col-6 my-2 text-right">
                                        <span>1800</span>
                                    </div>

                                    <div class="col-6 my-2">
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x checked"></span>
                                        <span class="fa fa-star fa-1x" style="color: #dfdfdf;"></span>
                                        <span class="fa fa-star fa-1x" style="color: #dfdfdf;"></span>
                                    </div>
                                    <div class="col-6 my-2 text-right">
                                        <span>1800</span>
                                    </div>


                                </div>

                            </div>


                        </div>
                        <button class="btn btn-fill btn-block btn-primary" type="button">Limpar Filtros</button>


                    </div>


                </div>


            </div>
        </div>


        <div class="col-9">

            <h3>{{count($products)}} Resultados</h3>
            <div class="card">
                <div class="card-body">

                    <form method="post" action="{{ route('products.search') }}" autocomplete="off">
                        @method('POST')
                        @csrf
                        <div class=" justify-content-center align-items-center"
                             style="display: flex; flex-direction: row">
                            <div style="flex: 1">
                                <input type="text" name="search" class="form-control"
                                                        placeholder="Buscar"></div>
                            <div>
                                <button class="btn btn-fill btn-block btn-primary" type="submit">Pesquisar</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>


            @forelse ($products as $product)
                <div class="card">
                    <div class="card-body">
                        <div class="card-body all-icons">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-2">
                                    <div class="media-body">
                                        <img
                                            src="{{$product->thumbnail}}"
                                            width="100">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h2 class="card-title">{{$product->name}}</h2>
                                    
                                    <h4 class="card-title">{{$product->description}}</h4>
                                </div>
                                <div class="col-3">
                                    <div class="text-right">
                                        <button class="btn btn-fill  btn-secondary"
                                                type="button">{{$product->note}}</button>
                                    </div>
                                    <h3 class="card-title">R$:{{$product->price}}</h3>
                                    <button class="btn btn-fill btn-block btn-secondary" type="button"><i
                                            class="far fa-heart"></i> Amei
                                    </button>
                                    <button class="btn btn-fill btn-block btn-secondary" type="button"><i
                                            class="fas fa-shopping-cart"></i> Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty

                <div class="card">
                    <div class="card-body">
                        <h3>Nenhum produto emcontrado</h3>
                    </div>
                </div>



            @endforelse

            {{ $products->links() }}


        </div>
    </div>

    <style>
        .relative svg {
            max-width: 20px;
        }
    </style>
@endsection
