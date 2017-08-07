@extends('admin._layouts.app')
@include('admin._layouts.nav')
<br>
@section('content')
<div class="container">
  <nav class="green">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{route('adminsam.principal') }}" class="breadcrumb">Inicio</a>
        <a href="{{route('adminsam.disponibilidade') }}" class="breadcrumb">lista de Disponibilidades</a>
        <a href="#!" class="breadcrumb">Adicionar Disponibilidades</a>
      </div>
    </div>
  </nav>
  <div class="row">
   <form action="{{route('adminsam.disponibilidade.salvar') }}" method="post">
     @include('admin._disponibilidade.form')
      <button class="btn blue">Salvar Registro</button>
   </form>
  </div>
</div>
@endsection
