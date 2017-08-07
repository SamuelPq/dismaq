@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal')}}" class="breadcrumb">Inicio</a>
        <a href="{{route('adminsam.subcategoria')}}" class="breadcrumb">Lista de SubCategorias</a>
        <a href="#!" class="breadcrumb">Alteração de SubCategoria</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.subcategoria.atualizar', $registro->id) }}" method="post">

       <input type="hidden" name="_method" value="put">
        @include('admin._subcategoria.form')
      <button class="btn blue">Atualizar Registro</button>
   </form>
  </div>
</div>
@endsection
