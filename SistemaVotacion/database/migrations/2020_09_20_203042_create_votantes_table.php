<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //VOTANTECEDULA, VOTANTENOMBRES, VOTANTEAPELLIDOS, VOTANTEFECHANACIMIENTO, VOTANTEPROVINCIA, 
        //VOTANTECANTON, VOTANTECIRCUNSCRIPCION, VOTANTEPARROQUIA, VOTANTETIPO, VOTANTECODIGOBARRAS,VOTANTEFOTO
        Schema::create('votantes', function (Blueprint $table) {
            $table->id('VOTANTECEDULA');
            $table->string('VOTANTENOMBRES');
            $table->string('VOTANTEAPELLIDOS');
            $table->date('VOTANTEFECHANACIMIENTO');
            $table->string('VOTANTEPROVINCIA');
            $table->string('VOTANTECANTON');
            $table->integer('VOTANTECIRCUNSCRIPCION');
            $table->string('VOTANTEPARROQUIA');
            $table->string('VOTANTETIPO');
            $table->string('VOTANTECODIGOBARRAS');
            $table->binary('VOTANTEFOTO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votantes');
    }
}
