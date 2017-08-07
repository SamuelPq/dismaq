@extends('admin._layouts.app')
@section('content')
@include('admin._layouts.nav')        
<div class="container">
    <div class="row">
      <div class="card {{ Session::get('mensagem')['class'] }}">
        <div align="center" class="card-content">
          {{  Session::get('mensagem')['msg'] }}
        </div>
      </div>

    </div>
  </div>
@endsection
