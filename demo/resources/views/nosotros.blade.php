@extends('plantilla');

@section('seccion')
    <h1>Este es mi equipo de trabajo</h1>

    @foreach ($equipo as $e)
    <a href="{{ route('nosotros',$e) }}" class="h4 text-danger">{{$e}}</a><br>
    @endforeach

    @if (!empty($nombre))
         <h2 class="mt-5">El nombre es {{ $nombre }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Inventore dolore quisquam fugit iure vitae similique veritatis ex totam quas atque, 
            dolores obcaecati aliquid labore sed. Non voluptas sapiente ratione expedita?
        </p>
    @endif
@endsection