<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VehiculoController extends Controller
{
    public function index(): View
    {
        $vehiculos = Vehiculo::query()->latest()->paginate(10);

        return view('vehiculos.index', compact('vehiculos'));
    }

    public function create(): View
    {
        return view('vehiculos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'placa' => ['required', 'string', 'max:15', 'unique:vehiculos,placa'],
            'tipo' => ['required', 'string', 'max:20'],
            'marca' => ['required', 'string', 'max:50'],
            'color' => ['required', 'string', 'max:30'],
            'propietario' => ['required', 'string', 'max:120'],
            'telefono' => ['nullable', 'string', 'max:20'],
            'hora_entrada' => ['required', 'date'],
            'hora_salida' => ['nullable', 'date', 'after_or_equal:hora_entrada'],
            'observaciones' => ['nullable', 'string', 'max:500'],
        ]);

        Vehiculo::query()->create($validated);

        return redirect()->route('vehiculos.index')
            ->with('status', 'Vehículo registrado correctamente.');
    }

    public function show(Vehiculo $vehiculo): View
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    public function edit(Vehiculo $vehiculo): View
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo): RedirectResponse
    {
        $validated = $request->validate([
            'placa' => ['required', 'string', 'max:15', 'unique:vehiculos,placa,' . $vehiculo->id],
            'tipo' => ['required', 'string', 'max:20'],
            'marca' => ['required', 'string', 'max:50'],
            'color' => ['required', 'string', 'max:30'],
            'propietario' => ['required', 'string', 'max:120'],
            'telefono' => ['nullable', 'string', 'max:20'],
            'hora_entrada' => ['required', 'date'],
            'hora_salida' => ['nullable', 'date', 'after_or_equal:hora_entrada'],
            'observaciones' => ['nullable', 'string', 'max:500'],
        ]);

        $vehiculo->update($validated);

        return redirect()->route('vehiculos.index')
            ->with('status', 'Vehículo actualizado correctamente.');
    }

    public function destroy(Vehiculo $vehiculo): RedirectResponse
    {
        $vehiculo->delete();

        return redirect()->route('vehiculos.index')
            ->with('status', 'Vehículo eliminado correctamente.');
    }
}
