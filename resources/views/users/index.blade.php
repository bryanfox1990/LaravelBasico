@extends('layout')

@section('content')
    <h2>{{ $titulo }}</h2>

    @if(!empty($equipo))
    <ul>
    @foreach($equipo as $posicion=>$jugador)
    <li>{{"El " . $posicion . " es " . $jugador }}
    </li>
    @endforeach

    @else
    <p>No hay usuario registrado.</p>
    @endif
    </ul>
@endsection


@section('slider')
@parent
<h2>Barra Lateral Personalizada</h2>
@endsection
