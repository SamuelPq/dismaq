<div class="">
    {{ csrf_field() }}
    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <input placeholder="Placeholder" id="titulo" name="titulo" type="text" class="validate" value="{{ isset($registro->titulo)? $registro->titulo:'' }}">
      <label for="titulo">Nome</label>
    </div>

    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <input placeholder="Placeholder" id="icone" name="icone" type="text" class="validate" value="{{ isset($registro->icone)? $registro->icone:'' }}">
      <label for="icone">Descrição</label>
    </div>
</div>
