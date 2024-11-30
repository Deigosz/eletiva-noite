<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\turno;

class TurnoController extends Controller
{
    public function index()
    {
        $turno = turno::all();
        return view("turno.index", compact('turno'));
    }

    public function create()
    {
        return view("turno.create");
    }

    public function store(Request $request)
    {
        turno::create($request->all());
        return redirect("/turnos");
    }

    public function show(string $id)
    {
        $turno = turno ::findOrFail($id);
        return view('turno.show', compact('turno'));
    }

    public function edit(string $id)
    {
        $turno = turno::findOrFail($id);
        return view('turno.edit', compact('turno'));
    }

    public function update(Request $request, string $id)
    {
        $turno = turno ::findOrFail($id);
        $turno->update($request->all());
        return redirect("/turnos");
    }

    public function destroy(string $id)
    {
        $turno = turno ::findOrFail($id);
        $turno->delete();
        return redirect("/turnos");
    }
}
