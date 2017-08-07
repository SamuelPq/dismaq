@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal')}}" class="breadcrumb">Inicio</a>
        <a href="{{route('adminsam.produto')}}" class="breadcrumb">Lista de SubCategorias</a>
        <a href="#!" class="breadcrumb">Alteração de SubCategoria</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.produto.atualizar', $produto->id) }}" method="post" enctype="multipart/form-data">
       <input type="hidden" name="_method" value="put">
  {!! csrf_field() !!}
  @include('admin._produto.form')
      <button class="btn blue">Atualizar Registro</button>
   </form>
  </div>
</div>
@endsection
