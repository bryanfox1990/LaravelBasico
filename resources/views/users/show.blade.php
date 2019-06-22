@extends('layout')

@section('title',"Usuario {$id}")

@section('content')
<h2>Usuario {{ $id }}</h2>
Mostrando detalle del usuario: {{ $id }}
@endsection
