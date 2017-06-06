<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddReqstatIdToResearchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('researchs', function (Blueprint $table) {
              $table->foreign('reqstat_id')->references('id')->on('reqstats');
              $table->foreign('rescstat_id')->references('id')->on('rescstats');
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
            $table->dropForeign('researchs_reqstat_id_foreign');
            $table->dropForeign('researchs_rescstat_id_foreign');

        });
    }
}
