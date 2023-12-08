@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
        @if($errors->any())
          @foreach($errors->all() as $error)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ $error }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endforeach
        @endif
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <div class="card">
              <div class="card-header">                  
                  <a type="button" class="btn btn-primary float-right" href="{{ route('products.create') }}">Добавить</a>                  
                  <h3 class="card-title">Продукты</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Артикул</th>
                      <th>Название</th>
                      <th>Статус</th>
                      <th>Атрибуты</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>                    
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->article }}</td>
                      <td>{{ $product->name }}</td>                    
                      <td>{{ $product->status }}</td>
                      <td>Размер: {{ $product->properties['size'] }} <br> Цвет: {{ $product->properties['color']}}</td> 
                      <td>
                        <a class="badge badge-success" href="{{ route('products.show', ['id'=>$product->id]) }}">Read</a>
                        <a class="badge badge-warning" href="{{ route('products.edit', ['id'=>$product->id]) }}">Update</a>
                        <form action="{{ route('products.destroy', ['id'=>$product->id]) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge badge-danger">Delete</button>  
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>
</div>
        
@endsection