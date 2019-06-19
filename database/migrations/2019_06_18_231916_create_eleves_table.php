<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateElevesTable extends Migration {

	public function up()
	{
		Schema::create('eleves', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('categorie_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('nom', 250);
			$table->string('prenom', 250);
			$table->date('date_naissance');
			$table->string('nom_parent', 250);
			$table->string('contact');
			$table->string('email', 250);
			$table->string('groupe_sanguin', 250);
			$table->string('photo', 250);
			$table->string('cm', 250);
			$table->string('pj', 250);
		});
	}

	public function down()
	{
		Schema::drop('eleves');
	}
}