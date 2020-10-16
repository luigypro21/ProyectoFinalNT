<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulantes extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'POSTULANTEID';
    public $incrementing = false;
    protected $fillable = [
        'POSTULANTEID', 'PAPELETANUMERO', 'VOTANTECEDULA', 'POSTULANTECARGO', 'POSTULANTEPARTIDO', 'POSTULANTENUMEROLISTA',
        'POSTULANTEFOTOLISTA', 'CANTIDADVOTOS', 'TIPOVOTO','POSTULANTEFOTO' ,'POSTULANTENOMBRE','POSTULANTEAPELLIDO','VICENOMBRE',
        'VICEAPELLIDO','VICEFOTO'
    ];

    public function getGetImageAttribute()
    {
        if ($this->POSTULANTEFOTOLISTA && $this->POSTULANTEFOTO) {
            return url("storage/$this->POSTULANTEFOTOLISTA");
        }
    }
    public function getGetImage2Attribute()
    {
        if ($this->POSTULANTEFOTO) {
            return url("storage/$this->POSTULANTEFOTO");
        }
    }
    public function getGetImage3Attribute()
    {
        if ($this->POSTULANTEFOTO) {
            return url("storage/$this->VICEFOTO");
        }
    }
}
