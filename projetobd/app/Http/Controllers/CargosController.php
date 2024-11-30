<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cargos;


class CargosController extends Controller
{
    public function index()
    {
        $cargos = cargos::all();
        return view("cargos.index", compact('cargos'));
    }

    public function create()
    {
        return view("cargos.create");
    }

    public function store(Request $request)
    {
        cargos::create($request->all());
        return redirect("/cargos");
    }

    public function show(string $id)
    {
        $cargo = cargos ::findOrFail($id);
        return view('cargos.show', compact('cargo'));
    }


    public function edit(string $id)
    {
        $cargo = cargos ::findOrFail($id); 
        return view('cargos.edit', compact('cargo')); 
    }

    public function update(Request $request, string $id)
    {
        $cliente = cargos ::findOrFail($id);
        $cliente->update($request->all());
        return redirect("/cargos");
    }

    public function destroy(string $id)
    {
        $cargo = cargos ::findOrFail($id);
        $cargo->delete();
        return redirect("/cargos");
    }
}
