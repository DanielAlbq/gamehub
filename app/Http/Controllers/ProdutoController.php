<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required|exists:categorias,id',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação para a imagem
        ]);

        // Criação do produto
        $produto = Produto::create($validatedData);

        // Armazenar a imagem, se foi enviada
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('produtos', 'public'); // Armazena a imagem na pasta public/produtos
            $produto->imagem = $imagemPath; // Salva o caminho da imagem no banco de dados
            $produto->save(); // Salva a alteração
        }

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);
        $categorias = Categoria::all();
        return view('produtos.edit', compact('produto', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required|exists:categorias,id',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validação para a imagem
        ]);

        $produto = Produto::findOrFail($id);
        $produto->fill($validatedData); // Atualiza os campos

        // Se uma nova imagem foi enviada, atualiza a imagem
        if ($request->hasFile('imagem')) {
            // Remove a imagem antiga, se existir
            if ($produto->imagem) {
                $oldImagePath = public_path('storage/' . $produto->imagem);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Deleta a imagem antiga
                }
            }

            $imagemPath = $request->file('imagem')->store('produtos', 'public'); // Armazena a nova imagem
            $produto->imagem = $imagemPath; // Atualiza o caminho da imagem
        }

        $produto->save(); // Salva as alterações no produto

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        // Remove a imagem do disco, se existir
        if ($produto->imagem) {
            $oldImagePath = public_path('storage/' . $produto->imagem);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Deleta a imagem do disco
            }
        }
        $produto->delete(); // Deleta o produto
        return redirect()->route('produtos.index')->with('success', 'Produto deletado com sucesso!');
    }

    public function show($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);
        return view('produtos.show', compact('produto'));
    }
}
