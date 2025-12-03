@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Citas del día</h2>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Teleconsulta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($citas as $c)
            <tr>
                <td>{{ $c['paciente'] }}</td>
                <td>{{ $c['hora'] }}</td>
                <td>{{ $c['estado'] }}</td>
                <td>
                    <a href="{{ route('medico.teleconsulta', 1) }}" class="btn btn-primary">Iniciar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection