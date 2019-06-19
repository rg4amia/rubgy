<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('versements', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('versements', function(Blueprint $table) {
			$table->foreign('eleve_id')->references('id')->on('eleves')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('eleves', function(Blueprint $table) {
			$table->foreign('categorie_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('eleves', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
        Schema::table('eleves', function(Blueprint $table) {
            $table->dropForeign('eleves_categorie_id_foreign');
        });
        Schema::table('eleves', function(Blueprint $table) {
            $table->dropForeign('eleves_user_id_foreign');
        });
		Schema::table('versements', function(Blueprint $table) {
			$table->dropForeign('versements_user_id_foreign');
		});
		Schema::table('versements', function(Blueprint $table) {
			$table->dropForeign('versements_eleve_id_foreign');
		});
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_user_id_foreign');
		});

	}
}
