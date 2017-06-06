<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldidToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('segmentation_id')->references('id')->on('segmentations');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('position_id')->references('id')->on('positions');
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
        
        $table->dropForeign('users_gender_id_foreign');
        $table->dropForeign('users_religion_id_foreign');
        $table->dropForeign('users_segmentation_id_foreign');
        $table->dropForeign('users_card_id_foreign');
        $table->dropForeign('users_position_id_foreign');
        });
    }
}
