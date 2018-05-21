<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    protected $table = 'tipos_clientes';

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
        'codigo','nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
    
}
