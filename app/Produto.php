<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  public function galeria(){
  return $this->hasMany('App\Galeria', 'produto_id');
}
public function marca(){
  return $this->belongsTo('App\Marca', 'marca_id');
}
public function disponibilidade(){
  return $this->belongsTo('App\Disponibilidade', 'disponibilidade_id');
}
  // public function subcategoria(){
  //   return $this->hasMany('\App\SubCategoria', 'subcategoria_id');
  //   // return $this->belongsTo('\App\SubCategoria', 'subcategoria_id');
//  }
}
