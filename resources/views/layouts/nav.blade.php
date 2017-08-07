
<!--Navbar-->
<nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('site.index')}}">
            <!--<strong>Dismaq</strong>-->
            <img src="{{ asset('img/LogoDismaq.png')}}" alt="" style="max-width: 150px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="{{ route('site.index')}}" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i>
                        Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.contato')}}" class="nav-link"><i class="fa fa-phone" aria-hidden="true"></i>Contatos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.sobre')}}" class="nav-link"><i class="fa fa-wechat" aria-hidden="true"></i>Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.index')}}" class="nav-link"><i class="fa fa-map-o" aria-hidden="true"></i>Atuação</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.parceiro')}}" class="nav-link"><i class="fa fa-truck" aria-hidden="true"></i>Parceiros</a>
                </li>
            </ul>
            <form class="form-inline waves-effect waves-light" action="{{ route('site.pesquisa')}}">
                <input class="form-control" name="produto" type="text" value="{{isset($busca['produto'])? $busca['produto'] : '' }}" placeholder="Search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </form>

        </div>
    </div>
</nav>
<!--/.Navbar-->
