<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disponibilidade;
class DisponibilidadeController extends Controller
{
    public function index(){
      $registros = Disponibilidade::all();
      return view('admin._disponibilidade.index', compact('registros'));
    }
    public function editar($id){
      $registro = Disponibilidade::find($id);
      return view('admin._disponibilidade.editar', compact('registro'));
    }
    public function atualizar(Request $request, $id){
      $dados = $request->all();
      $registros = Disponibilidade::find($id);

      $registros->titulo = $dados['titulo'];
      $registros->icone = $dados['icone'];
      $resultado = $registros->save();
      if ($resultado) {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'foi  alterada com sucesso!', 'class'=>'green white-text']);
      }else {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'NÂO foi  alterada !', 'class'=>'red white-text']);
      }
      return redirect()->route('adminsam.disponibilidade');
    }
    public function adicionar(){
      return view('admin._disponibilidade.adicionar');
    }
    public function salvar(Request $request){
      $dados = $request->all();
      $registros = new Disponibilidade();

      $registros->titulo = $dados['titulo'];
      $registros->icone = $dados['icone'];
      $resultado = $registros->save();
      if ($resultado) {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'foi  cadastrada com sucesso!', 'class'=>'green white-text']);
      }else {
        \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registros->titulo.'NÂO foi  cadastrada com sucesso!', 'class'=>'red white-text']);
      }
      return redirect()->route('adminsam.disponibilidade');
    }
    public function deletar($id){
      $registro = Disponibilidade::find($id);
      $registro->delete();
      \Session::flash('mensagem', ['msg'=>'Disponibilidade '.$registro->titulo.' foi  Excluida com sucesso!', 'class'=>'red white-text']);
        return redirect()->route('adminsam.disponibilidade');
    }
}
