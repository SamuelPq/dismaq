<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubCategoria;
use App\Categoria;
class SubCategoriaController extends Controller
{

    public function index()
    {
        $registros = SubCategoria::all();
        return view('admin._subcategoria.index', compact('registros'));
    }

    public function adicionar()
    {
      $categorias = Categoria::all();
      return view('admin._subcategoria.adicionar', compact('categorias'));
    }

    public function salvar(Request $request)
    {
      $dados = $request->all();
      $registro = new \App\SubCategoria();
      $registro->titulo = $dados['titulo'];
      $registro->icone = $dados['icone'];
      $registro->categoria_id    =$dados['categoria_id'];
      $registro->save();
      \Session::flash('mensagem', ['msg'=>'Sub-Categoria '.$dados['titulo'].' cadastrada com sucesso!', 'class'=>'green white-text']);
      return redirect()->route('adminsam.subcategoria');
    }

    public function editar($id)
    {
      $categorias = Categoria::all();
      $registro = SubCategoria::find($id);

      return view('admin._subcategoria.editar', compact('categorias', 'registro'));
    }

    public function atualizar(Request $request, $id)
    {
      $dados = $request->all();
      $registro = SubCategoria::find($id);
      $registro->titulo = $dados['titulo'];
      $registro->icone = $dados['icone'];
      $registro->categoria_id    =$dados['categoria_id'];
      $registro->save();
      \Session::flash('mensagem', ['msg'=>'Sub-Categoria '.$dados['titulo'].' Atualizada com sucesso!', 'class'=>'green white-text']);
      return redirect()->route('adminsam.subcategoria');
    }

    public function deletar($id)
    {
        //
    }
}
