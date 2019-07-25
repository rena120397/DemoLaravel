@extends('plantilla')

@section('seccion')
    <h1>Editar nota {{ $nota->id}} </h1>

    @if (session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>
    @endif

     <form action=" {{ route('notas.update', $nota->id) }} " method="POST">
        @method('PUT')
        @csrf

         @error('nombre')
             <div class="alert alert-danger">
                 El nombre es obligatorio
             </div>
         @enderror
         @error('descripcion')
             <div class="alert alert-danger">
                 La descripcion es obligatorio
             </div>
         @enderror

        <input type="text" class="form-control mb-2" name="nombre" id="nombre" value=" {{ $nota->nombre }}" placeholder="Nombre">
        <input type="text" class="form-control mb-2" name="descripcion" id="descripcion" value=" {{ $nota->descripcion }}" placeholder="Decripcion">
        <button class="btn btn-warning btn-block" type="submit"> Editar </button>
    </form>
    <br>
@endsection