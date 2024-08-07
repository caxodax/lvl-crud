@extends('theme.base')

@section('content')
<div class="container py-5 text-center">
    @if (@isset($products))
         <h1 class="">Modificar de Producto</h1>
         @else
         <h1 class="">Formulario de Producto</h1>
    @endif
   
    @if (@isset($products))
    <form action="{{ route('products.update',$products)}}" method="POST">
        @method('PUT')
    @else
    <form action="{{ route('products.store')}}" method="POST">
@endif
    
        @csrf

       
        <div class="mb-3">
            <label for="brand_id" class="form-label">ID_BRAND</label>
            <input type="text" name="brand_id" class="form-control" placeholder="" required>
            <p class="form-text">Escribe el codigo del producto</p>
            @error('comments')
                    <p class="form-text text-danger"> por favor introducir el producto</p>
            @enderror

            @if (@isset($products))
            <button type="submit" class="btn btn-info"> Editar Producto</button>
            @else
            <button type="submit" class="btn btn-info"> Guardar Producto</button>
       @endif
           

        </div>
    </form>
    
</div>
   
@endsection