@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal') }}" class="breadcrumb">Inicio</a>
        <a href="{{route('adminsam.subcategoria') }}" class="breadcrumb">lista de SubCategorias</a>
        <a href="#!" class="breadcrumb">Adicionar SubCategoria</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.subcategoria.salvar') }}" method="post">
     @include('admin._subcategoria.form')
      <button class="btn blue">Salvar Registro</button>
   </form>
  </div>
</div>
@endsection
