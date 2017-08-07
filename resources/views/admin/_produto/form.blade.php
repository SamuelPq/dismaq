{!! csrf_field() !!}
<div class="">
  <div class="input-field col s6">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="titulo" type="text" class="validate" value="{{ isset($produto->titulo)? $produto->titulo:'' }}">
     <label for="titulo">Titulo</label>
   </div>
   <div class="input-field col s6">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="codigo" type="text" class="validate" value="{{ isset($produto->codigo)? $produto->codigo:'' }}">
     <label for="codigo">Codigo</label>
   </div>
   <div class="input-field col s6">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="descricao" type="text" class="validate" value="{{ isset($produto->descricao)? $produto->descricao:'' }}">
     <label for="descricao">Descrição</label>
   </div>
   <div class="input-field col s6">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="valor" type="text" class="validate" value="{{ isset($produto->valor)? $produto->valor:'' }}">
     <label for="valor">Valor</label>
   </div>

   <div class="input-field col s12">
     <i class="material-icons prefix">perm_identity</i>
     <select class="" name="marca_id">
       @foreach($marcas as $marca)
       <option value="{{$marca->id}}"> {{$marca->nome}}</option>
       @endforeach
     </select>
     <!-- <input placeholder="Marca" name="marca" type="text" class="validate" value="{{ isset($produto->marca)? $produto->marca:'' }}"> -->
     <label for="marca">Marca</label>
   </div>
   <!-- <div class="col m6 s12">
     @if(isset($produto->imagem))
       <img whidth="120px" src="{{ asset($produto->imagem)}}" alt="">
     @endif
   </div> -->
   <div class="input-field col s12">
       <i class="material-icons prefix">perm_identity</i>
       <select name="status">
           <option value="Ativado" {{ (isset($produto->status) && $produto->status == 'Ativado' ? 'selected' : '')}}>Ativado</option>
           <option value="Desativado" {{ (isset($produto->status) && $produto->status == 'Desativado'? 'selected': '')}}>Desativado</option>
       </select>
     <label>Status</label>
   </div>

   <div class="input-field col s6">
       <i class="material-icons prefix">perm_identity</i>
       <select name="subcategoria_id">
         @foreach($subcategorias as $subcategoria)
         <option value="{{ $subcategoria->id }}" {{ (isset($produto->subcategoria->id) && $produto->subcategoria->id == $subcategoria->id ? 'selected' : '')}}>{{ $subcategoria->titulo }}</option>
         @endforeach
       </select>
       <label>Sub-Categoria</label>
   </div>

   <div class="input-field col s6">
       <i class="material-icons prefix">perm_identity</i>
       <select name="disponibilidade_id">
         @foreach($disponibilidades as $disponibilidade)
         <option value="{{ $disponibilidade->id }}" {{ (isset($produto->disponibilidade->id) && $produto->disponibilidade->id == $disponibilidade->id ? 'selected' : '')}}>{{ $disponibilidade->titulo }}</option>
         @endforeach
       </select>
       <label>Disponibilidade</label>
   </div>
   <div class="input-field col s3">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="conteudo" type="text" class="validate" value="{{ isset($produto->conteudo)? $produto->conteudo:'' }}">
     <label for="titulo">Conteudo</label>
   </div>
   <div class="input-field col s3">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="voltagem" type="text" class="validate" value="{{ isset($produto->voltagem)? $produto->voltagem:'' }}">
     <label for="titulo">Voltagem</label>
   </div>
   <div class="input-field col s3">
     <i class="material-icons prefix">perm_identity</i>
     <input placeholder="Placeholder" name="medida" type="text" class="validate" value="{{ isset($produto->medida)? $produto->medida:'' }}">
     <label for="titulo">Medida</label>
   </div>
   <div class="input-field col s3">
     <select name="publicar">
         <option value="sim" {{ (isset($produto->publicar) && $produto->publicar == 'sim' ? 'selected' : '')}}>Sim</option>
         <option value="nao" {{ (isset($produto->publicar) && $produto->publicar == 'nao'? 'selected': '')}}>Não</option>
     </select>
     <label for="titulo">publicar</label>
   </div>
   <div class="row">
     <div class="file-field input-field col m6 s12">
       <div class="btn">
         <span>...</span>
         <input type="file" name="imagem" value="">
       </div>
       <div class="file-path-wrapper">
         <input type="text" name="imagem" class="file-path validate" value="{{ isset($produto->imagem)? $produto->imagem:'' }}">
       </div>
       <div class="col m6 s12">
         @if(isset($produto->imagem))
           <img whidth="120px" src="{{ asset($produto->imagem)}}" alt="" width="200px">
         @endif
       </div>
     </div>
   </div>
</div>
