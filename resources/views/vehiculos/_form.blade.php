@csrf
<label>Placa</label>
<input type="text" name="placa" value="{{ old('placa', $vehiculo->placa ?? '') }}" required>

<label>Tipo</label>
<select name="tipo" required>
    @php $tipoActual = old('tipo', $vehiculo->tipo ?? ''); @endphp
    <option value="">Seleccione</option>
    @foreach(['Auto', 'Moto', 'Camioneta'] as $tipo)
        <option value="{{ $tipo }}" @selected($tipoActual === $tipo)>{{ $tipo }}</option>
    @endforeach
</select>

<label>Marca</label>
<input type="text" name="marca" value="{{ old('marca', $vehiculo->marca ?? '') }}" required>

<label>Color</label>
<input type="text" name="color" value="{{ old('color', $vehiculo->color ?? '') }}" required>

<label>Propietario</label>
<input type="text" name="propietario" value="{{ old('propietario', $vehiculo->propietario ?? '') }}" required>

<label>Teléfono</label>
<input type="text" name="telefono" value="{{ old('telefono', $vehiculo->telefono ?? '') }}">

<label>Hora de entrada</label>
<input type="datetime-local" name="hora_entrada" value="{{ old('hora_entrada', isset($vehiculo) && $vehiculo->hora_entrada ? $vehiculo->hora_entrada->format('Y-m-d\\TH:i') : '') }}" required>

<label>Hora de salida</label>
<input type="datetime-local" name="hora_salida" value="{{ old('hora_salida', isset($vehiculo) && $vehiculo->hora_salida ? $vehiculo->hora_salida->format('Y-m-d\\TH:i') : '') }}">

<label>Observaciones</label>
<textarea name="observaciones" rows="4">{{ old('observaciones', $vehiculo->observaciones ?? '') }}</textarea>

<button class="btn" type="submit" style="margin-top: 1rem;">Guardar</button>
<a class="btn btn-secondary" href="{{ route('vehiculos.index') }}">Volver</a>
