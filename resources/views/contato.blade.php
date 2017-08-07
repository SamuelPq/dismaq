@extends('layouts.app')
@include('layouts.nav')
@include('layouts.slide')
<br>
<!-- <nav class="navbar navbar-dark bg-default">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
    </div>
</nav> -->
@section('content')
<div class="container">

<div class="row">
    <div class="col-12 col-lg-1">
        <img src="{{asset('img/Phone.png')}}" alt="..." class="rounded-circle animated bounce infinite" width="80px;">
    </div>
    <div class="col-12 col-lg-11">
        <h3>(63) 3313-1285</h3>
    </div>
    <div class="col-12 col-lg-1">
        <img src="{{asset('img/email.png')}}" alt="..." class="rounded-circle animated bounce infinite" width="80px;">
    </div>
    <div class="col-12 col-lg-11">
        <h3>dismaqcontato@gmail.com</h3>
    </div>
    <hr>
  <div class="col-12 col-lg-12">
    <div class="card card-block green">
      <h4 class="card-text">Deixe sua Mensagem</h4>
    </div>
    <hr>
  </div>
    <div class="col-12 col-lg-6">
      <div class="md-form">
        <input type="text" id="form1" class="" placeholder="Nome">
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="md-form">
        <input type="email" id="form2" class="" placeholder="Email">
      </div>
    </div>
    <div class="col-12 col-lg-12">
      <div class="md-form">
        <textarea type="text" id="form3" class="md-textarea" placeholder="Mensagem"></textarea>
      </div>
    </div>

    <div class="col-12 col-lg-12">
      <div class="md-form">
        <a href="#" class="btn btn-primary">Enviar a Mensagem</a>
      </div>
    </div>
</div>

</div>
@endsection
