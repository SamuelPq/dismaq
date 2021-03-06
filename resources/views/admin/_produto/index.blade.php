@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
  <div class="container">
    @if(Session::get('mensagem'))
<div class="card {{ Session::get('mensagem')['class'] }}">
  <div align="center" class="card-content">
    {{  Session::get('mensagem')['msg'] }}
  </div>
</div>
@else
<h2 class="center"> Produtos</h2>
@endif
    <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal')}}" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Lista de Produtos</a>
      </div>
    </div>
  </nav>
  <table class="highlight">
        <thead>
          <tr>
              <th>Imagem</th>
              <th>Titulo</th>
              <th>Valor</th>
              <th>Código</th>
              <th>Editar</th>
              <th>Excluir</th>
          </tr>
        </thead>

        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td><img class="circle responsive-img" src="{{ asset($registro->imagem)}}" alt="" width="80px;"></td>
            <td>{{ $registro->titulo}}</td>
            <td>R$:{{ number_format($registro->valor,2,",", ".") }}</td>
            <td>{{ $registro->codigo}}</td>
            <td><a href="{{route('adminsam.produto.editar', $registro->id) }}" class="waves-effect waves-light btn orange"><i class="material-icons right">edit</i>alterar</a></td>
            <td><a href="javascript:if(confirm('Deseja deletar esse registro?')){window.location.href= '{{ route('adminsam.produto.deletar',$registro->id)}}'}" class="waves-effect waves-light btn red"><i class="material-icons right">delete_forever</i>excluir</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="divider">
      </div>
      <br>
      <a href="{{ route('adminsam.produto.adicionar')}}" class="waves-effect waves-light btn blue"><i class="material-icons right">note_add</i>adicionar novo</a>
</div>
<br>
@endsection
