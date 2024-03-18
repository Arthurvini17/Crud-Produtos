<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $produtos = Produtos::all();
        return view('crud.home', ['produtos' => $produtos]);

    }
}
