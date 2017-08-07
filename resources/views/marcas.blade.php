@extends('layouts.app')
@include('layouts.nav')
@include('layouts.slide')
<br>
<div class="container">
    <div class="row">
    <br>
        @foreach($marcas as $marca)
        <div class="col-lg-3">
            <img src="{{ asset($marca->imagem)}}" class="img-fluid wow fadeInUp" alt="{{$marca->nome}}" width="300px;">
        </div>
        @endforeach
    <hr>
</div>
</div>
