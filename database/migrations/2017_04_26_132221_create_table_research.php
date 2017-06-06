<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResearch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('researchs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('title_research');
            $table->string('purpose');
            $table->integer('sector_id')->unsigned();
            $table->string('case_study');
            $table->text('abstraction');
            $table->string('guarantor');
            $table->integer('regency_id')->unsigned();
            $table->integer('reqstat_id')->unsigned();
            $table->integer('rescstat_id')->unsigned();
            $table->text('description_data_requested');
            $table->string('proposal_file');
            $table->string('research_file')->nullable(); //upload file by admin

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
       /* Schema::dropIfExists('researchs');
        Schema::table('researchs', function(Blueprint $table){
        $table->dropForeign('researchs_user_id_foreign');
        $table->dropForeign('researchs_sector_id_foreign');
                
     });*/
    }
}
