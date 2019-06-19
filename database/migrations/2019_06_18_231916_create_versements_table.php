<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVersementsTable extends Migration {

	public function up()
	{
		Schema::create('versements', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('montant');
			$table->integer('user_id')->unsigned();
			$table->integer('eleve_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('versements');
	}
}