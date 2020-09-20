<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapeletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //PAPELETANUMERO, VOTANTECEDULA, PAPELETATIPO, PAPELETAFECHAVOTACION 
        Schema::create('papeletas', function (Blueprint $table) {
            $table->integer('PAPELETANUMERO');
            $table->iteger('VOTANTECEDULA');
            $table->string('PAPELETATIPO');
            $table->date('PAPELETAFECHAVOTACION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papeletas');
    }
}
