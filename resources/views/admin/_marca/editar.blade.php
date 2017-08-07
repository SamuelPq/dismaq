@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Lista de Marcas</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.marca.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
       <input type="hidden" name="_method" value="put">
        @include('admin._marca.form')
      <button class="btn blue">Atualizar Registro</button>
   </form>
  </div>
</div>
@endsection
