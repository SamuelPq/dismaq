<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Produto;
class ProdutoController extends Controller
{
    public function index()
    {
        $registros = Produto::orderBy('created_at','desc')->get();
        return view('admin._produto.index', compact('registros'));
    }
    public function adicionar()
    {
      $disponibilidades = \App\Disponibilidade::all();
      $marcas           = \App\Marca::all();
      $subcategorias    = \App\SubCategoria::all();
      return view('admin._produto.adicionar', compact('disponibilidades', 'marcas', 'subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request){
      $dados = $request->all();
      $produto = new \App\Produto();

      $produto->subcategoria_id    =$dados['subcategoria_id'];
      $produto->disponibilidade_id    =$dados['disponibilidade_id'];
      $produto->marca_id    =$dados['marca_id'];
      $produto->titulo    =$dados['titulo'];
      $produto->descricao =$dados['descricao'];
      $produto->codigo    =$dados['codigo'];
      $produto->valor     =$dados['valor'];
      $produto->conteudo  =$dados['conteudo'];
      $produto->voltagem  =$dados['voltagem'];
      $produto->publicar  =$dados['publicar'];
      $produto->imagem    =$dados['imagem'];
      $produto->medida    =$dados['medida'];
      $produto->status    =$dados['status'];

      $file = $request->file('imagem');
      if ($file) {
        $rand = rand(11111, 99999);
        $diretorio = "img/produtos/".str_slug($dados['titulo'],'_')."/";
        $ext = $file->guessClientExtension();
        $nomearquivo = "img".$rand.".".$ext;
        $file->move($diretorio, $nomearquivo);
        $produto->imagem = $diretorio."/".$nomearquivo;
        }
      $produto->save();
      \Session::flash('mensagem', ['msg'=>'Produto cadastrada com sucesso!', 'class'=>'green white-text']);
      return redirect()->route('adminsam.produto');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
      $produto          = Produto::find($id);
      $disponibilidades = \App\Disponibilidade::all();
      $marcas           = \App\Marca::all();
      $subcategorias    = \App\SubCategoria::all();
      return view('admin._produto.editar', compact('disponibilidades', 'marcas', 'subcategorias', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id)
    {
      $dados = $request->all();
      $produto = \App\Produto::find($id);
      $produto->subcategoria_id    =$dados['subcategoria_id'];
      $produto->disponibilidade_id    =$dados['disponibilidade_id'];
      $produto->marca_id    =$dados['marca_id'];
      $produto->titulo    =$dados['titulo'];
      $produto->descricao =$dados['descricao'];
      $produto->codigo    =$dados['codigo'];
      $produto->valor     =$dados['valor'];
      $produto->conteudo  =$dados['conteudo'];
      $produto->voltagem  =$dados['voltagem'];
      $produto->publicar    =$dados['publicar'];
      $produto->medida    =$dados['medida'];
      $produto->status    =$dados['status'];
     $produto->imagem    = $dados['imagem'];
      $file = $request->file('imagem');
      if ($file) {
        $rand = rand(11111,99999);
        $diretorio = "img/produtos/".str_slug($dados['titulo'],'_')."/";
        $ext = $file->guessClientExtension();
        $nomearquivo = "img".$rand.".".$ext;
        $file->move($diretorio, $nomearquivo);
        $produto->imagem = $diretorio."/".$nomearquivo;
        }
        $produto->save();
      \Session::flash('mensagem', ['msg'=>'Categoria cadastrada com sucesso!', 'class'=>'green white-text']);
      return redirect()->route('adminsam.produto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
      $registro = \App\Produto::find($id);
      $registro->delete();
      \Session::flash('mensagem', ['msg'=>'Produto '.$registro->titulo.' foi excluida com sucesso!', 'class'=>'red white-text']);
      return redirect()->route('adminsam.produto');
    }
}
