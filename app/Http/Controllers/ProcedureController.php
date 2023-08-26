<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Http\Services\UserService;

class ProcedureController extends Controller
{
    protected $userModel;
    protected $userService;
    protected $doctorService;
    public function index()
{
    $procedures = Procedure::all();
    $user = auth()->user(); // Adicione esta linha para obter o usuário autenticado
    return view('procedures.index', compact('procedures', 'user'));
}


public function create()
{
    $user = auth()->user(); // Obtém o usuário autenticado
    return view('procedures.create', compact('user'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
        ]);
    
        Procedure::create($validatedData);
    
        return redirect()->route('procedures.index')->with('success', 'Procedimento criado com sucesso.');
    }
    

    public function edit(Procedure $procedure)
    {
        return view('procedures.edit', compact('procedure'));
    }

    public function update(Request $request, Procedure $procedure)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|numeric',
        ]);
    
        $procedure->update($validatedData);
    
        return redirect()->route('procedures.index')->with('success', 'Procedimento atualizado com sucesso.');
    }
    

    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
    
        return redirect()->route('procedures.index')->with('success', 'Procedimento excluído com sucesso.');
    }
    
}



