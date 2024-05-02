<?php

namespace App\Http\Controllers;

use App\Models\formaPagamento; 
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    public function index()
    {
        $formas = FormaPagamento::all();
        return view('formaPagamento.index', compact('formas'));
    }

    public function create()
    {
        return view('formaPagamento.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'metodo' => 'required|string|max:255',
        ]);

        FormaPagamento::create($validatedData);
        return redirect()->route('formaPagamento.index');
    }

    public function edit($id)
    {
        $forma = FormaPagamento::findOrFail($id);
        return view('formaPagamento.edit', compact('forma'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'metodo' => 'required|string|max:255',
        ]);

        FormaPagamento::whereId($id)->update($validatedData);
        return redirect()->route('formaPagamento.index');
    }

    public function destroy($id)
    {
        FormaPagamento::findOrFail($id)->delete();
        return redirect()->route('formaPagamento.index');
    }

    public function show($id)
    {
        $forma = FormaPagamento::findOrFail($id);
        return view('formaPagamento.show', compact('forma'));
    }
}
