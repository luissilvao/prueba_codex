@extends('layouts.app')

@section('content')
    <div class="header">
        <h1>Cochera - Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn">Nuevo vehículo</a>
    </div>

    @if(session('status'))
        <div class="alert">{{ session('status') }}</div>
    @endif

    <table>
        <thead>
        <tr>
            <th>Placa</th>
            <th>Tipo</th>
            <th>Propietario</th>
            <th>Entrada</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @forelse($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->placa }}</td>
                <td>{{ $vehiculo->tipo }}</td>
                <td>{{ $vehiculo->propietario }}</td>
                <td>{{ $vehiculo->hora_entrada?->format('d/m/Y H:i') }}</td>
                <td>
                    <div class="actions">
                        <a class="btn btn-secondary" href="{{ route('vehiculos.show', $vehiculo) }}">Ver</a>
                        <a class="btn" href="{{ route('vehiculos.edit', $vehiculo) }}">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay vehículos registrados.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    <div style="margin-top: 1rem;">
        {{ $vehiculos->links() }}
    </div>
@endsection
