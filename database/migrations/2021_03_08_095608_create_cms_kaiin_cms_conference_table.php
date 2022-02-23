<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsKaiinCmsConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_kaiin_cms_conference_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cms_conference_type_id');
            $table->integer('cms_kaiin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cms_kaiin_cms_conference');
    }

}
