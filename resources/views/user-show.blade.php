@include('header')
<div class="row mt-3">
  <div class="col-8">
    <h2>Usuario {{ $id }}</h2>
    Mostrando detalle del usuario: {{ $id }}
  </div>
  <div class="col-4">
 @include('sidebar')
  </div>
</div>
@include('footer')
