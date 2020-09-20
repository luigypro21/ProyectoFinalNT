<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProstulantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //'POSTULANTEID', 'PAPELETANUMERO','VOTANTECEDULA','POSTULANTECARGO','POSTULANTEPARTIDO','POSTULANTENUMEROLISTA',
        //'POSTULANTEFOTOLISTA','CANTIDADVOTOS','TIPOVOTO'
        Schema::create('postulantes', function (Blueprint $table) {
            $table->string('POSTULANTEID');
            $table->iteger('PAPELETANUMERO');
            $table->iteger('VOTANTECEDULA');
            $table->string('POSTULANTECARGO');
            $table->string('POSTULANTEPARTIDO');
            $table->iteger('POSTULANTENUMEROLISTA');
            $table->binary('POSTULANTEFOTOLISTA');
            $table->iteger('CANTIDADVOTOS');
            $table->string('TIPOVOTO');
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
        Schema::dropIfExists('postulantes');
    }
}
