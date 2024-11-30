<?php

namespace App\Http\Controllers;

use App\Models\Batida;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class BatidaController extends Controller
{
    public function index()
    {
        $batidas = Batida::with('funcionario')->get();
        return view('batidas.index', compact('batidas'));
    }

    public function create()
    {
        $funcionarios = Funcionario::all();
        return view('batidas.create', compact('funcionarios'));
    }

    public function store(Request $request)
    {
        Batida::create($request->all());
        return redirect()->route('batidas.index')->with('success', 'Batida registrada com sucesso!');
    }

    public function show($id)
    {
        $batida = Batida::with('funcionario')->findOrFail($id);
        return view('batidas.show', compact('batida'));
    }

    public function edit($id)
    {
        $batida = Batida::findOrFail($id);
        $funcionarios = Funcionario::all();
        return view('batidas.edit', compact('batida', 'funcionarios'));
    }

    public function update(Request $request, $id)
    {
        $batida = Batida::findOrFail($id);
        $batida->update($request->all());
        return redirect()->route('batidas.index')->with('success', 'Batida atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $batida = Batida::findOrFail($id);
        $batida->delete();
        return redirect()->route('batidas.index')->with('success', 'Batida excluída com sucesso!');
    }
}
