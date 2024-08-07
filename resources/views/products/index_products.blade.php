@extends('theme.base')

@section('content')
<div class="container py-5 text-center">
    <h1 class="">Listado de Productos</h1>
    <a href="{{ route('products.create')}}" class="btn btn-primary">Crear Producto</a>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Brand_id</th>
            <th>Acciones</th>

        </thead>
        <tbody>
            @forelse ($products as $detail)
            <td>{{$detail->id}}</td>
            <td>{{$detail->brand_id}}</td>
            <td>
                <a href="{{ route('products.edit',$detail)}}" class="btn btn-warning">Modificar</a>
          
                <form action="{{ route('products.destroy',$detail)}}" method="post" class="d-inline">
         
                    @method('DELETE')
                     @csrf
                     <button type="submit" class="btn btn-danger" 
                     onclick="return confirm('¿Estas seguro de elimnar el registro?')">Eliminar</button>
        </form>
    </td>
           
            @empty
                
            @endforelse
        </tbody>
    </table>
{{$products->links()}}
</div>
   
@endsection