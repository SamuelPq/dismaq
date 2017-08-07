@extends('admin._layouts.app')

<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{route('adminsam.principal')}}">Inicio</a></li>
  <li><a href="{{route('adminsam.marca')}}">Marcas</a></li>
  <li><a href="{{route('adminsam.disponibilidade')}}">Disponibilidades</a></li>
  <li><a href="{{route('adminsam.categoria')}}">Categorias</a></li>
  <li><a href="{{route('adminsam.subcategoria')}}">SubCategorias</a></li>
  <li class="divider"></li>
  <li><a href="{{route('adminsam.produto')}}">Produtos</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <div class="container">
    <a href="#!" class="brand-logo ">Site</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">login</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a class='dropdown-button btn-large' href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>

  </div>
</nav>
