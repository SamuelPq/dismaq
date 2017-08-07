<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Produto;
use App\Categoria;

class HomeController extends Controller
{
  public function index(){
    $produtos = Produto::paginate(16);
    $marcas = \App\Marca::all();
    $categorias = \App\Categoria::select()->with('subcategorias')->get();
     // $categoria = Categoria::all();
    //$subcategorias = $categorias->subcategorias();
//    dd($categorias);
    //Album::select()->with('musicas')->get();
    $paginacao = true;

    return view('home', compact('produtos','marcas', 'categorias', 'paginacao'));
  }
    public function pesquisa(Request $request){
        $pesquisa = $request->all();

        if($pesquisa['produto'] <> ''){
          $testeproduto = [
            ['titulo', 'like', '%'.$pesquisa['produto'].'%' ]
          ];
        }else{
          $testeproduto = [
              ['titulo', '<>', null ]
          ];
        }
        $produtos = Produto::where('publicar','=','sim')
        ->where($testeproduto)
        ->orderBy('id', 'desc')
        ->get();
        return view('busca', compact('pesquisa','produtos'));
      }
      public function contato(){

        return view('contato');
      }
      public function sobre(){

        return view('sobre');
      }
      public function enviarContato(){

      }
      public function sub($id){
        $produtos = Produto::where('subcategoria_id', '=',$id)->get();
        return view('busca', compact('produtos'));
      }
      public function parceiro(){
          $marcas = \App\Marca::all();
          return view('marcas', compact('marcas'));
      }
  }
