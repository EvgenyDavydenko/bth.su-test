@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

      <div class="col-md-12">
            <div class="card">
              <div class="card-header">                
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>                    
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->article }}</td>
                      <td>{{ $product->name }}</td>                    
                      <td>{{ $product->status }}</td>
                      <td>Размер: {{ $product->properties['size'] }} <br> Цвет: {{ $product->properties['color']}}</td> 
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>
</div>
        
@endsection