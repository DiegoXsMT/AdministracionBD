<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view("empresas.index", compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectores = [
            'Tecnología de la Información (TI)',
            'Finanzas y Banca',
            'Salud y Farmacéutica',
            'Energía y Recursos Naturales',
            'Manufactura',
            'Educación',
            'Servicios Profesionales',
            'Alimentación y Agricultura',
            'Turismo y Hospitalidad',
            'Medios de Comunicación y Entretenimiento',
        ];

        return view("empresas.create", compact('sectores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // Valida los datos recibidos del formulario
        $request->validate([
            'nombre' => 'required',
            'sector' => 'required',
            'NIF' => 'required|string',
            'situacion_fiscal' => 'required',
            'fecha_inicio_operaciones' => 'required',
            'domicilio' => 'required|string',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Crea una nueva instancia del modelo Empresa con los datos del formulario
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->sector = $request->sector;
        $empresa->NIF = $request->NIF;
        $empresa->situacion_fiscal = $request->situacion_fiscal;
        $empresa->fecha_inicio_operaciones = $request->fecha_inicio_operaciones;
        $empresa->domicilio = $request->domicilio;

        // Procesar y almacenar la imagen
        $empresa->imagen = $request->file('imagen')->store('empresas', 'public');

        // Guarda la empresa en la base de datos
        if ($empresa->save()) {
            return redirect()->route('empresas.index')->with('success', 'Empresa creada correctamente.');
        } else {
            return back()->withInput()->withErrors(['msg' => 'Error al guardar la empresa.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
