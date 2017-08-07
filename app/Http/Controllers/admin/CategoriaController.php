<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
class CategoriaController extends Controller
{
    public function index(){
      $registros = Categoria::all();
      return view('admin._categoria.index', compact('registros'));
    }
    public function editar($id){
      $registro = Categoria::find($id);
      return view('admin._categoria.editar', compact('registro'));
    }
    public function atualizar(Request $request, $id){
      $dados = $request->all();
      $registros = Categoria::find($id);

      $registros->titulo = $dados['titulo'];
      $registros->icone = $dados['icone'];
      $resultado = $registros->save();
      if ($resultado) {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'foi  alterada com sucesso!', 'class'=>'green white-text']);
      }else {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'NÂO foi  alterada !', 'class'=>'red white-text']);
      }
      return redirect()->route('adminsam.categoria');
    }
    public function adicionar(){
      // $registro = Categoria::find($id);
      return view('admin._categoria.adicionar', compact('registro'));
    }
    public function salvar(Request $request){
      $dados = $request->all();
      $registro = new Categoria();

      $registro->titulo = $dados['titulo'];
      $registro->icone = $dados['icone'];
      $registro->save();
      \Session::flash('mensagem', ['msg'=>'Categoria-> '.$registro->titulo.' <-foi  alterada com sucesso!', 'class'=>'green white-text']);
      return redirect()->route('adminsam.categoria');
    }
    public function deletar($id){
      $registro = Categoria::find($id);
      $registro->delete();
      \Session::flash('mensagem', ['msg'=>'Categoria-> '.$registro->titulo.' <-foi  Apagada com sucesso!', 'class'=>'red white-text']);
      return redirect()->route('adminsam.categoria');
    }
}
