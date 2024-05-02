<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Estoque;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with(['categoria', 'estoque'])->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $estoques = Estoque::all();
        return view('produtos.create', compact('categorias', 'estoques'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
            'estoque_id' => 'required|exists:estoque,id',
        ]);

        Produto::create($validatedData);
        return redirect()->route('produtos.index');
    }

    public function edit($id)
    {
        $produto = Produto::with(['categoria', 'estoque'])->findOrFail($id);
        $categorias = Categoria::all();
        $estoques = Estoque::all();
        return view('produtos.edit', compact('produto', 'categorias', 'estoques'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
            'estoque_id' => 'required|exists:estoque,id',
        ]);

        Produto::whereId($id)->update($validatedData);
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect()->route('produtos.index');
    }

    public function show($id)
    {
        $produto = Produto::with(['categoria', 'estoque'])->findOrFail($id);
        return view('produtos.show', compact('produto'));
    }
}
