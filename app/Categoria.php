<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubCategoria;
class Categoria extends Model
{
  public function subcategorias(){
    return $this->hasMany('\App\SubCategoria');
  }
}
