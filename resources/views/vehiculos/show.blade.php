@extends('layouts.app')

@section('content')
    <h1>Detalle del vehículo</h1>

    <p><strong>Placa:</strong> {{ $vehiculo->placa }}</p>
    <p><strong>Tipo:</strong> {{ $vehiculo->tipo }}</p>
    <p><strong>Marca:</strong> {{ $vehiculo->marca }}</p>
    <p><strong>Color:</strong> {{ $vehiculo->color }}</p>
    <p><strong>Propietario:</strong> {{ $vehiculo->propietario }}</p>
    <p><strong>Teléfono:</strong> {{ $vehiculo->telefono ?: 'N/A' }}</p>
    <p><strong>Hora entrada:</strong> {{ $vehiculo->hora_entrada?->format('d/m/Y H:i') }}</p>
    <p><strong>Hora salida:</strong> {{ $vehiculo->hora_salida?->format('d/m/Y H:i') ?: 'Aún dentro de la cochera' }}</p>
    <p><strong>Observaciones:</strong> {{ $vehiculo->observaciones ?: 'Sin observaciones' }}</p>

    <a class="btn" href="{{ route('vehiculos.edit', $vehiculo) }}">Editar</a>
    <a class="btn btn-secondary" href="{{ route('vehiculos.index') }}">Volver</a>
@endsection
