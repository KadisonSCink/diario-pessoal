<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
        ]);

        // Criar a nota no banco de dados
        Nota::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        return redirect()->back()->with('success', 'Nota salva com sucesso!');
    }

    public function index()
    {
        $notas = Nota::all();
        return view('diario.index', compact('notas'));
    }

    public function edit($id)
    {
        $nota = Nota::findOrFail($id);
        return view('diario.edit', compact('nota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
        ]);

        $nota = Nota::findOrFail($id);
        $nota->update([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        return redirect()->route('notas.index')->with('success', 'Nota atualizada com sucesso!');
    }


    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();

        return redirect()->route('notas.index')->with('success', 'Nota excluída com sucesso!');
    }

    public function create()
    {
        return view('diario.create');
    }


}
