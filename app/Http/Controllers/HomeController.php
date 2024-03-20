<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use Dompdf\Dompdf;


class HomeController extends Controller
{


    public $isOpen = false;

    public function index()
    {
        $search = request('search');
        if ($search) {
            $produtos = Produtos::where('name', 'like', '%' . $search . '%')->paginate(10);
        } else {
            $produtos = Produtos::all();
        }
    
        return view('crud.home', ['produtos' => $produtos]);
    }

   

  

 
}
