<div class="">
    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <input placeholder="Placeholder" id="name" name="nome" type="text" class="validate" value="{{ isset($registro->nome)? $registro->nome:'' }}">
      <label for="nome">Nome</label>
    </div>

    <div class="input-field col s12">
      <i class="material-icons prefix">perm_identity</i>
      <input placeholder="Placeholder" id="descricao" name="descricao" type="text" class="validate" value="{{ isset($registro->descricao)? $registro->descricao:'' }}">
      <label for="name">Descrição</label>
    </div>
    <div class="row">
      <div class="file-field input-field col m6 s12">
        <div class="btn">
          <span>...</span>
          <input type="file" name="imagem" value="">
        </div>
        <div class="file-path-wrapper">
          <input type="text" name="imagem" class="file-path validate" value="{{ isset($registro->imagem)? $registro->imagem:'' }}">
        </div>
        <div class="col m6 s12">
          @if(isset($registro->imagem))
            <img whidth="120px" src="{{ asset($registro->imagem)}}" alt="">
          @endif

        </div>
      </div>
    </div>
</div>
