<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Votantes extends Authenticatable
{
    //, , , , 
    //, , , , ,  
    use Notifiable;

    protected $table = 'votantes';

    
    public $timestamps = false;
    protected $primaryKey = 'VOTANTECEDULA';
    public $incrementing = false;
    protected $fillable = [
        'VOTANTECEDULA', 'VOTANTENOMBRES', 'VOTANTEAPELLIDOS', 'VOTANTEFECHANACIMIENTO', 'VOTANTEPROVINCIA', 'VOTANTECANTON',
        'VOTANTECIRCUNSCRIPCION', 'VOTANTEPARROQUIA', 'VOTANTETIPO', 'VOTANTECODIGOBARRAS','VOTANTEFOTO','VOTANTEPASSWORD'
    ];

    public function getGetImageAttribute()
    {
        if ($this->VOTANTEFOTO) {
            return url("storage/$this->VOTANTEFOTO");
        }
    }

    protected $hidden = [
        'VOTANTEPASSWORD', 'remember_token',
    ];


    public function getAuthPassword()
    {
      return $this->VOTANTEPASSWORD;
    }
}
