<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSectorRegencyIdToResearchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('researchs', function (Blueprint $table) {
            $table->foreign('sector_id')->references('id')->on('sectors'); 
            $table->foreign('regency_id')->references('id')->on('regencys');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('researchs', function (Blueprint $table) {
            //
            $table->dropForeign('researchs_sector_id_foreign'); 
            $table->dropForeign('researchs_regency_id_foreign');
            $table->dropForeign('researchs_user_id_foreign');
        });
    }
}
