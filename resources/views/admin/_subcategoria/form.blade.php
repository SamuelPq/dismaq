<div class="">
     {{ csrf_field() }}
    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <input placeholder="Placeholder" id="name" name="titulo" type="text" class="validate" value="{{ isset($registro->titulo)? $registro->titulo:'' }}">
      <label for="name">Titulo Sub Categoria</label>
    </div>

    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <select class="" name="categoria_id">
        @foreach($categorias as $categoria)
        <option   value="{{$categoria->id}}"> {{$categoria->titulo}}</option>
        @endforeach
      </select>
      <!-- <input placeholder="Marca" name="marca" type="text" class="validate" value="{{ isset($produto->marca)? $produto->marca:'' }}"> -->
      <label for="categoria">Categoria</label>
    </div>

    <div class="input-field col s12">
       <i class="material-icons prefix">photo</i>
      <input  type="text" name="icone" class="validate" value="{{ isset($registro->icone)? $registro->icone:'' }}">
      <label for="icone">Icone</label>
    </div>
</div>
