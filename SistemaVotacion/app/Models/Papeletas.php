<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papeletas extends Model
{
    //PAPELETANUMERO, VOTANTECEDULA, PAPELETATIPO, PAPELETAFECHAVOTACION
    public $timestamps = false;
    protected $primaryKey = 'PAPELETANUMERO';
    public $incrementing = false;
    protected $fillable = [
        'PAPELETANUMERO', 'VOTANTECEDULA', 'PAPELETATIPO', 'PAPELETAFECHAVOTACION'
    ];

}
