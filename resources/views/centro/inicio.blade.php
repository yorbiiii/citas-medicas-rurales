{{-- resources/views/centro/inicio.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Panel de Centro de Salud</h1>
    <p>Bienvenido, {{ auth()->user()->name }} (rol: {{ auth()->user()->rol }})</p>
</div>
@endsection
