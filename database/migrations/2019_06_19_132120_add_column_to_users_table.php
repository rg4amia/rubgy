<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->boolean('active');
            //              $table->string('first_name')->nullable();
            //            $table->string('last_name')->nullable();
            //            $table->boolean('status')->default(true)->after('email');
            //            $table->boolean('confirmed')->default(true)->after('status');
            //            $table->json('settings')->nullable()->after('status');
            //            $table->unsignedBigInteger('created_by')->default(0);
            //            $table->dateTime('deleted_at')->nullable();
            //            $table->string('emailpaypal')->unique()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
