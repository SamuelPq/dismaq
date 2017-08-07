
@extends('layouts.app')
@extends('layouts.nav')
@extends('layouts.slide')
@section('content')
<div class="container">
 <div class="row section">
   <h3 align="center"></h3>
   <div class="divider">
   </div>
 </div>
 <div class="card card-primary text-center z-depth-2">
     <div class="card-block">
         <h4 class="white-text">Detalhes do produto {{$produto->titulo}}</h4>
     </div>
 </div>
 <hr>
   <div class="row section">
     <div class="col s12 m6">
       @if($produto->galeria()->count())
       <div class="row">
         <div class="slider">
           <ul class="slides">
             @foreach($galeria as $imagem)
             <li>
               <img class="materialboxed" width="650" src="{{asset($imagem->imagem)}}" alt="">
               <div class="caption {{ $direcao[rand(0,2)] }}">
                 <h4>{{$imagem->titulo}}</h4>
                 <h5>{{$imagem->descricao}}</h5>
               </div>
             </li>
             @endforeach
           </ul>
         </div>
       </div>
       <div class="row" align="center">
         <button onclick="sliderPrev()" class="btn orange">Anterior</button>
         <button onclick="sliderNext()" class="btn orange">Proxima</button>
       </div>
       @else
       <div class="view hm-zoom">
           <img class="materialboxed" width="650" src="{{asset($produto->imagem)}}" alt="Visualização do Produto">
       </div>
       @endif
     </div>
     <div class="col s12 m6">
       <h4>{{ $produto->titulo }}</h4>
       <blockquote>
         {{$produto->descricao}}
       </blockquote>
       <p><b>Marca:</b>{{$produto->marca->nome}}</p>
       <p><b>Codigo:</b>{{$produto->codigo}}</p>
       <p><b>Status:</b>{{$produto->status}}</p>
       <p><b>Voltagem:</b>{{$produto->voltagem}}</p>
       <p><b>Valor:</b>{{number_format($produto->valor,2,",",".")}}</p>
       <a class="btn deep-orange darken-1" href="{{route('site.contato')}}"> Entrar em Contato</a>
     </div>
   </div>
</div>
@endsection
