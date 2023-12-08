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
                
                <h3 class="card-title">Добавить продукт</h3>
            </div>

            <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="article">Артикул</label>
                    <input id="article" name="article" type="text" class="form-control" placeholder="Введите артикул товара">
                </div>
                <div class="form-group">
                    <label for="name">Название</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Введите название товара">
                </div>
                <div class="form-group">
                    <label for="status">Статус</label>
                    <input id="status" name="status" type="text" class="form-control" placeholder="Введите статус товара">
                </div>

                <div class="row">
                  <div class="form-group col-4">
                    <label for="color">Цвет</label>
                    <input id="color" name="properties[color]" type="text" class="form-control" placeholder="Red">
                  </div>
                  <div class="form-group col-4">
                    <label for="size">Размер</label>
                    <input id="size" name="properties[size]" type="text" class="form-control" placeholder="XL">
                  </div>
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary float-right">Добавить</button>
                  </div>
                </div>
            </form>
            </div>
        </div>
          
      </div>
    </div>
</div>
        
@endsection