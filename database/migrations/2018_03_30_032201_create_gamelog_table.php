<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamelogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('gamelogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
			$table->string('action');
            $table->timestamps();
        });
		
		Schema::table('gamelogs',function(Blueprint $table){
			$table->foreign('id_user')
			      ->references('id')
				  ->on('users')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::table('gamelogs',function (Blueprint $table){
			$table->dropForeign('gamelogs_id_user_foreign');
		});
		
        Schema::dropIfExists('gamelogs');
    }
}
