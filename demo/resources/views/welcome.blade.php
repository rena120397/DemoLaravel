    @extends('plantilla')


    @section('seccion')
        <div class="container my-4">
        <h1 class="display-4">Notas</h1>

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <form action=" {{route('notas.crear')}} " method="POST">
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

            <input type="text" class="form-control mb-2" name="nombre" id="nombre" value=" {{ old('nombre') }}" placeholder="Nombre">
            <input type="text" class="form-control mb-2" name="descripcion" id="descripcion" value=" {{ old('descripcion') }}" placeholder="Decripcion">
            <button class="btn btn-primary btn-block" type="submit"> Agregar </button>
        </form>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notas as $item)
            <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>
            <a href=" {{ route('notas.detalle', $item->id) }}"> {{ $item->nombre }} </a>
                
            </td>
            <td>{{ $item->descripcion }}</td>
            <td>
                <a href=" {{ route('notas.editar',$item->id) }} " class="btn btn-warning btn-sm">Editar</a>
                
                <form action=" {{ route('notas.eliminar',$item->id) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"> Eliminar </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    {{ $notas->links() }}
    @endsection
 