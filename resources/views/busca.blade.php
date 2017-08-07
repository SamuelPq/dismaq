
@extends('layouts.app')
  @include('layouts.nav')
  @include('layouts.slide')

  <br>
  <div class="">

  </div>
@section('content')
<div class="container">
</div>
<!--Content-->
<div class="container">
    <div class="android-more-section">
      <!-- <div class="android-section-title mdl-typography--display-1-color-contrast">More from Android</div> -->
      <div class="android-card-container mdl-grid">
                  @foreach($produtos as $produto)
        <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
          <div class="mdl-card__media">
          <a href="{{ route('site.produto',$produto->id)}}">
            <img src="{{ asset($produto->imagem)}}" class="img-fluid" alt="{{$produto->titulo}}">
          </a>
          </div>
          <i>Cód.{{$produto->codigo}}</i>
          <div class="mdl-card__title">
             <label class="mdl-card__title-text">{{ $produto->titulo }} - {{ $produto->marca->nome }}</label>
          </div>
          <div class="mdl-card__supporting-text">
            <span class="mdl-typography--font-light mdl-typography--subhead"><b>{{$produto->disponibilidade->titulo }}</b></span>
            <span class="mdl-typography--font-light mdl-typography--subhead"><b>R$:{{ number_format($produto->valor,2,",", ".") }}</b></span>
          </div>
          <div class="mdl-card__actions">
             <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="{{ route('site.produto',$produto->id)}}">
               ver mais
               <i class="fa fa-eye" aria-hidden="true"></i>
             </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
</div>

@endsection
