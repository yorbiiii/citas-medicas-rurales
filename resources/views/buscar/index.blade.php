@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Búsqueda de Profesionales Médicos</h2>
    
    <form method="GET" action="{{ route('buscar.medicos') }}" class="mb-4">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="especialidad_id">Especialidad</label>
                    <select name="especialidad_id" id="especialidad_id" class="form-control">
                        <option value="">Todas las Especialidades</option>
                        @foreach ($especialidades as $especialidad)
                            <option value="{{ $especialidad->id }}"
                                {{ request('especialidad_id') == $especialidad->id ? 'selected' : '' }}>
                                {{ $especialidad->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Buscar</button>
            </div>
        </div>
    </form>

    <hr>

    @if ($medicos->isNotEmpty())
        <h3>Resultados de la Búsqueda ({{ $medicos->count() }})</h3>
        <div class="row">
            @foreach ($medicos as $medico)
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $medico->user->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $medico->especialidad->nombre }}</h6>
                        <p class="card-text">
                            Ubicación: <strong>{{ $medico->ubicacion }}</strong>
                            @if ($medico->centroSalud)
                                <br>Centro: {{ $medico->centroSalud->nombre }}
                            @endif
                        </p>
                        <a href="{{ route('medico.show', $medico->id) }}" class="btn btn-sm btn-success">Ver Horarios y Agendar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="alert alert-info">No se encontraron médicos con esos criterios. Por favor, realiza una búsqueda.</p>
    @endif
</div>
@endsection