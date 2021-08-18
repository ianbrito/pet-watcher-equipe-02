<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licenca extends Model
{
     protected $table = "licencas";
     protected $dates = ['data_licenciamento', 'data_vencimento'];

}
