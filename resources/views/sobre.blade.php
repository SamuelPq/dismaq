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
  <div class="card card-primary text-center z-depth-2">
      <div class="card-block">
          <p class="white-text">Contatos</p>
      </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header danger-color-dark white-text">
            Representante Comercial
        </div>
          <img src="{{asset('img/wagner.png')}}" class="responsive-img" alt="">
          <div class="card-block">
              <h4 class="card-title">Contatos</h4>
              <p>Solicite a visita, que iremos até você</p>
              <p><b>Telefone:</b> (63) 9 9996 4127)</p>
              <p><b>Telefone:</b> (63) 9 8429 9144)</p>
              <a class="btn btn-primary"><i class="fa fa-facebook"></i> Siga no Facebook</a>
            </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header success-color-dark white-text">
            Loja
        </div>
          <img src="{{asset('img/dismaq.jpg')}}" class="responsive-img" alt="">
          <div class="card-block">
              <h4 class="card-title">Contatos</h4>
              <p>Avenida castelo branco - Sol Nascente.</p>
              <p>Telefone - (63) 3313 1285.</p>
              <p>Cidade - Gurupi Tocantins</p>
              <a class="btn btn-primary"><i class="fa fa-facebook"></i>Siga no Facebook</a>
            </div>
      </div>
    </div>
<br>

</div>
</div>
@endsection
