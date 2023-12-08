@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-primary">
            <div class="card-header">
                
                <h3 class="card-title">Редактировать продукт</h3>
            </div>

            <div class="card-body">
            <form action="{{ route('products.update', ['id'=>$product->id]) }}" method="POST">
            @csrf
            @method('PATCH')
                <div class="form-group">
                    <label for="article">Артикул</label>
                    <input id="article" name="article" type="text" class="form-control" value="{{ $product->article }}">
                </div>
                <div class="form-group">
                    <label for="name">Название</label>
                    <input id="name" name="name" type="text" class="form-control" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <input id="status" name="status" type="text" class="form-control" value="{{ $product->status }}">
                </div>

                <div class="row">
                  <div class="form-group col-4">
                    <label for="color">Цвет</label>
                    <input id="color" name="properties[color]" type="text" class="form-control" value="{{ $product->properties['color'] }}">
                  </div>
                  <div class="form-group col-4">
                    <label for="size">Размер</label>
                    <input id="size" name="properties[size]" type="text" class="form-control" value="{{ $product->properties['size'] }}">
                  </div>
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary float-right">Редактировать</button>
                  </div>
                </div>
            </form>
            </div>
        </div>
          
      </div>
    </div>
</div>
        
@endsection