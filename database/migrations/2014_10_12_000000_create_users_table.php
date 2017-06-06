<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('pob');
            $table->date('dob');
            $table->integer('gender_id')->unsigned();
            $table->integer('religion_id')->unsigned();
            $table->integer('segmentation_id')->unsigned();
            $table->integer('card_id')->unsigned();
            $table->string('card_numb');
            $table->integer('position_id')->unsigned();
            $table->string('address');
            $table->string('telp_numb');
            $table->string('photo')->nullable();
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
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
        /*Schema::dropIfExists('users');
        
        Schema::table('users', function(Blueprint $table){
        $table->dropForeign('users_gender_id_foreign');
        $table->dropForeign('users_religion_id_foreign');
        $table->dropForeign('users_segmentation_id_foreign');
        $table->dropForeign('users_card_id_foreign');
        $table->dropForeign('users_position_id_foreign');
        
     });*/
    }
}
