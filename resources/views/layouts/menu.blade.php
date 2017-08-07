<nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
    <div class="container">
       <!-- <ul class="">
          @foreach($categorias as $categoria)
          <li class="nav-item dropdown btn-group">
              <a class="nav-link dropdown" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$categoria->titulo}}</a>
              <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenu1">
                    @foreach($categoria->SubCategorias as $sub)
                      <a href="{{ route('site.subcategoria',$sub->id)}}" class="dropdown-item">{{$sub->titulo}}</a>
                    @endforeach
              </div>
          </li>
          @endforeach
        </ul> -->
        <!--Dropdown primary-->
                    @foreach($categorias as $categoria)
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$categoria->titulo}}</button>
            <div class="dropdown-menu dropdown-primary">
                @foreach($categoria->SubCategorias as $sub)
                <a class="dropdown-item" href="{{ route('site.subcategoria',$sub->id)}}">{{$sub->titulo}}</a>
                @endforeach
            </div>
        </div>
            @endforeach
    </div>
</nav>
