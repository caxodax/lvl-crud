@extends('theme.base')

@section('content')
<div class="container py-5 text-center">
    <h1 class="">CRUD LARAVEL</h1>
    <a href="{{ route('products.index')}}" class="btn btn-primary">Listado de Producto</a>
</div>
   
@endsection
