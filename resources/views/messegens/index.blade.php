@extends('layouts.app', ['page' => __('Notifications'), 'pageSlug' => 'notifications'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="alert alert-secondary" role="alert">
                <a href="#"><i class="far fa-envelope"></i></a>
                <a href="#"><i class="far fa-comment-alt"></i></a>
                <a href="#"><i class="far fa-check-square"></i></a>
                <a href="#"><i class="far fa-calendar"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb bg-transparent">
                    
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <i class="tim-icons icon-double-right"></i>
                  <li class="breadcrumb-item active" aria-current="page">Conversas</li>
                </ol>
              </nav>
        </div>
    </div>
    <div class="row">
        
        

        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tim-icons icon-zoom-split"></i>
                      </div>      
                    </div>
                    <input type="text" class="form-control" placeholder="Buscar">
                  </div>
                </div>
              </div>

            @foreach ($messegens as $messeger)
                <div class="card">
                    <div class="card-body">
                        <div class="card-body all-icons">
                            <div class="row">
                                <div class="col-2">
                                    <div class="media-body">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h2 class="card-title">{{$messeger->title}}</h2>
                                    <h3 class="card-title">Por:{{$messeger->thumbnail}}</h3>
                                    <h4 class="card-title">{{$messeger->description}}</h4>
                                    
                                </div>
                                <div class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Excluir</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                                 
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <style>
        .relative svg {
            max-width: 20px;
        }
    </style>
@endsection