<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidao', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_certidao');
            $table->string('nm_envolvido1');
            $table->string('nm_envolvido2');
            $table->string('data_certidao');
            $table->string('nm_tabeliao');
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
        Schema::dropIfExists('certidao');
    }
}
