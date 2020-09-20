<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votantes extends Model
{
    //, , , , 
    //, , , , ,  
    public $timestamps = false;
    protected $primaryKey = 'VOTANTECEDULA';
    public $incrementing = false;
    protected $fillable = [
        'VOTANTECEDULA', 'VOTANTENOMBRES', 'VOTANTEAPELLIDOS', 'VOTANTEFECHANACIMIENTO', 'VOTANTEPROVINCIA', 'VOTANTECANTON',
        'VOTANTECIRCUNSCRIPCION', 'VOTANTEPARROQUIA', 'VOTANTETIPO', 'VOTANTECODIGOBARRAS'
    ];

    public function getGetImageAttribute()
    {
        if ($this->VOTANTEFOTO) {
            return url("storage/$this->VOTANTEFOTO");
        }
    }
}
