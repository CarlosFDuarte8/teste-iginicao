@extends('layouts.app', ['page' => __('Notifications'), 'pageSlug' => 'notifications'])

@section('content')
<div class="card card-register card-white">
    <div class="card-header">
        
        <h4 class="card-title">{{ _('Cadastro') }}</h4>
    </div>
    <form class="form" method="post" action="{{ route('products.create') }}">
        @csrf

        <div class="card-body">
            <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fab fa-product-hunt"></i>
                    </div>
                </div>
                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ _('Nome do Produto') }}" value="{{ old('name') }}">
                @include('alerts.feedback', ['field' => 'name'])
            </div>
            <div class="input-group{{ $errors->has('thumbnail') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="far fa-images"></i>
                    </div>
                </div>
                <input type="thumbnail" name="thumbnail" class="form-control{{ $errors->has('thumbnail') ? ' is-invalid' : '' }}" placeholder="{{ _('Imagem URL') }}" value="{{ old('thumbnail') }}">
                @include('alerts.feedback', ['field' => 'email'])
            </div>
            <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                </div>
                <input type="price" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ _('Preço') }}" value="{{ old('price') }}">
                @include('alerts.feedback', ['field' => 'price'])
            </div>
            
                      
            
            <div class="input-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-align-justify"></i>
                    </div>
                </div>
                <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ _('Descrição') }}">
                @include('alerts.feedback', ['field' => 'description'])
            </div>
            
            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-round btn-lg">{{ _('Cadastrar') }}</button>
        </div>
    </form>
</div>
@endsection
