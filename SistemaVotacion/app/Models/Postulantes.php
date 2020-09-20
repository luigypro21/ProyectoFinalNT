<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulantes extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'POSTULANTEID', 'PAPELETANUMERO','VOTANTECEDULA','POSTULANTECARGO','POSTULANTEPARTIDO','POSTULANTENUMEROLISTA',
        'POSTULANTEFOTOLISTA','CANTIDADVOTOS','TIPOVOTO'
    ];
}
