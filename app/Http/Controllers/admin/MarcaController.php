<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Marca;
class MarcaController extends Controller
{
    public function index(){
      $registros = Marca::all();
      return view('admin._marca.index', compact('registros'));
    }
    public function adicionar(){
      return view('admin._marca.adicionar');
    }
    public function salvar(Request $request){
      $dados = $request->all();
      $registros = new Marca();

      $registros->nome       = $dados['nome'];
      $registros->descricao  = $dados['descricao'];
      $registros->imagem     = $dados['imagem'];
      // Marca::create($request->all());

      $file = $request->file('imagem');
    	if($file){
    		$rand = rand(11111,99999);
    		$diretorio = "img/marcas/".str_slug($dados['nome'],'_')."/";
    		$ext = $file->guessClientExtension();
    		$nomeArquivo = "_img_".$rand.".".$ext;
    		$file->move($diretorio,$nomeArquivo);
    		$registros->imagem = $diretorio.'/'.$nomeArquivo;
    	}
         $registros->save();
        \Session::flash('mensagem', ['msg'=>'Marca '.$registros->nome. ' cadastrada com sucesso!', 'class'=>'green white-text']);
        return redirect()->route('adminsam.marca');
    }
    public function editar($id){
      $registro = Marca::find($id);
      return view('admin._marca.editar', compact('registro'));
    }
    public function atualizar(Request $request, $id){
      $dados = $request->all();
      $registros = Marca::find($id);

      $registros->nome       = $dados['nome'];
      $registros->descricao  = $dados['descricao'];
      $registros->imagem     = 'img/marcas/'.$dados['imagem'];

      $file = $request->file('imagem');
        if ($file) {
          $rand = rand(11111, 99999);
          $diretorio = "img/marcas/".str_slug($dados['nome'],'_')."/";
          $ext = $file->guessClientExtension();
          $nomearquivo = "img".$rand.".".$ext;
          $file->move($diretorio, $nomearquivo);
          $registroa->imagem = $diretorio."/".$nomearquivo;
          }
         $registros->save();
        \Session::flash('mensagem', ['msg'=>'Marca '.$registros->nome. ' alterada com sucesso!', 'class'=>'green white-text']);
        return redirect()->route('adminsam.marca');
    }
    public function deletar($id){
      $registro = Marca::find($id);
      $registro->delete();
      \Session::flash('mensagem', ['msg'=>'Marca '.$registro->nome. ' Excluida com sucesso!', 'class'=>'red white-text']);
      return redirect()->route('adminsam.marca');
    }
}
