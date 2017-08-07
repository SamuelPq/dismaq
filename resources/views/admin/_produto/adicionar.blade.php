@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal') }}" class="breadcrumb">Inicio</a>
        <a href="{{route('adminsam.produto') }}" class="breadcrumb">lista de SubCategorias</a>
        <a href="#!" class="breadcrumb">Adicionar SubCategoria</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.produto.salvar') }}" method="post" enctype="multipart/form-data">
     @include('admin._produto.form')
      <button class="btn blue">Salvar Registro</button>
   </form>
  </div>
</div>
@endsection
