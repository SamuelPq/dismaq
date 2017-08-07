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
<h2 class="center"> Marcas</h2>
@endif
    <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Lista de Marcas</a>
      </div>
    </div>
  </nav>
  <table class="highlight">
        <thead>
          <tr>
              <th>##</th>
              <th>Titulo</th>
              <th>Icone</th>
              <th>Foto</th>
              <th>Editar</th>
              <th>Excluir</th>
          </tr>
        </thead>

        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{$registro->id}}</td>
            <td>{{ $registro->nome}}</td>
            <td>{{ $registro->descricao}}</td>
            <td><img src="{{ asset($registro->imagem)}}" alt="" width="100px;"></td>
            <td><a href="{{route('adminsam.marca.editar', $registro->id) }}" class="waves-effect waves-light btn orange"><i class="material-icons right">edit</i>alterar</a></td>
            <td><a href="javascript:if(confirm('Deseja deletar esse registro?')){window.location.href= '{{ route('adminsam.marca.deletar',$registro->id)}}'}" class="waves-effect waves-light btn red"><i class="material-icons right">delete_forever</i>excluir</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="divider">
      </div>
      <br>
      <a href="{{ route('adminsam.marca.adicionar')}}" class="waves-effect waves-light btn blue"><i class="material-icons right">note_add</i>adicionar novo</a>
</div>
<br>
@endsection
