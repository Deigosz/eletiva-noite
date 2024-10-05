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

    public function edit($id)
    {
        $cargo = cargos::find($id);
        return view("cargos.edit", compact('cargo'));
    }
}
