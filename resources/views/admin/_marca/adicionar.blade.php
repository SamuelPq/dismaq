@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="#!" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Adicionar Marcas</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.marca.salvar') }}" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}
     @include('admin._marca.form')
      <button class="btn blue">Salvar Registro</button>
   </form>
  </div>
</div>
@endsection
