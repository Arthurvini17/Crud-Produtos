<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public $isOpen = false;

    public function index(){

        $produtos = Produtos::all();
        return view('crud.home', ['produtos' => $produtos]);


    }

    public function abrirView(){
        $this->isOpen = true;
    }
}
