@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teleconsulta - Cita #{{ $id }}</h2>

    <div class="alert alert-info">
        Esta es una simulación de videollamada.  
        Aquí luego irá WebRTC.
    </div>

    <div class="text-center">
        <button class="btn btn-primary">Encender cámara</button>
        <button class="btn btn-danger">Finalizar consulta</button>
    </div>
</div>
@endsection
