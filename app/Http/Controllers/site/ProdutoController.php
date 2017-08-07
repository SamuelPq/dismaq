<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
class ProdutoController extends Controller
{
    public function index($id){
      $produto = Produto::find($id);
      $galeria = $produto->galeria()->orderBy('ordem')->get();
      return view('produto', compact('produto','galeria'));
    }
}
