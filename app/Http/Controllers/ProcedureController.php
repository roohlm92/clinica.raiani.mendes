<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public function index()
    {
        $procedures = Procedure::all();
        return view('procedures.index', compact('procedures'));
    }

    public function create()
    {
        return view('procedures.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário aqui, se necessário.

        Procedure::create([
            'name' => $request->input('name'),
            'value' => $request->input('value'),
        ]);

        return redirect()->route('procedures.index')->with('success', 'Procedimento criado com sucesso.');
    }

    public function edit(Procedure $procedure)
    {
        return view('procedures.edit', compact('procedure'));
    }

    public function update(Request $request, Procedure $procedure)
    {
        // Validação dos dados do formulário aqui, se necessário.

        $procedure->update([
            'name' => $request->input('name'),
            'value' => $request->input('value'),
        ]);

        return redirect()->route('procedures.index')->with('success', 'Procedimento atualizado com sucesso.');
    }

    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        return redirect()->route('procedures.index')->with('success', 'Procedimento excluído com sucesso.');
    }
}

