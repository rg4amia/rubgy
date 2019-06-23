<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnneescolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anneescolaires', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string( 'anneescolaire' );
            $table->string( 'platform' );
            $table->date( 'datedebut' );
            $table->date( 'datefin' );
            $table->boolean( 'active' )->default( true );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anneescolaires');
    }
}
