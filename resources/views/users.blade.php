@include('header')

<div class="row mt-3">
  <div class="col-8">
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
  </div>
  <div class="col-4">
 @include('sidebar')
  </div>

</div>


@include('footer')
