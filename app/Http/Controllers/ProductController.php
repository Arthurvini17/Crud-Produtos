<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'validade' => ['required', 'date'],
                'preco' => ['required', 'numeric'],
                'comentario' => 'required',
                'categoria' => 'required',
            ],
            [
                'name.required' => 'O campo tem que ser preenchido',
                'validade.required' => 'O campo tem que ser preenchdo',
                'validade.date' => 'O Digite uma data',
                'comentario.required' => 'faça um comentario',
                'categoria.required' => 'Digite a categoria',
                'preco.required' => 'Digite o preço do produto',
                'preco.numeric' => 'O preço tem que ser numeros',
            ]
        );

        Produtos::create([
            'name' => $request->name,
            'categoria' => $request->categoria,
            'comentario' => $request->comentario,
            'validade' => $request->validade,
            'preco' => $request->preco,
        ]);
        return view('crud.home');
    }
    public function index()
    {
        $produtos = Produtos::all();
        return view('crud.create-product', ['produtos' => $produtos]);
    }
}
