@extends('layouts.app')

@section('content')
    <h1>Editar vehículo</h1>

    @if($errors->any())
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @method('PUT')
        @include('vehiculos._form')
    </form>
@endsection
