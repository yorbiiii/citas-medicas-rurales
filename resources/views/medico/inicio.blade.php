{{-- resources/views/medico/inicio.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Panel de Medico</h1>
    <p>Bienvenido, {{ auth()->user()->name }} (rol: {{ auth()->user()->rol }})</p>
</div>
@endsection
