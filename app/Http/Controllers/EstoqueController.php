<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        $estoques = Estoque::all();
        return view('estoque.index', compact('estoques'));
    }

    public function create()
    {
        return view('estoque.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'quantidade' => 'required|integer',
        ]);

        Estoque::create($validatedData);
        return redirect()->route('estoque.index');
    }

    public function edit($id)
    {
        $estoque = Estoque::findOrFail($id);
        return view('estoque.edit', compact('estoque'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'quantidade' => 'required|integer',
        ]);

        Estoque::whereId($id)->update($validatedData);
        return redirect()->route('estoque.index');
    }

    public function destroy($id)
    {
        Estoque::findOrFail($id)->delete();
        return redirect()->route('estoque.index');
    }

    public function show($id)
    {
        $estoque = Estoque::findOrFail($id);
        return view('estoque.show', compact('estoque'));
    }
}
