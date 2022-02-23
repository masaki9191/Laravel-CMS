<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->integer('type')->default(0);
            $table->string('name1')->nullable();
            $table->string('name2')->nullable();
            $table->string('kana1')->nullable();
            $table->string('kana2')->nullable();
            $table->string('cname')->nullable();
            $table->string('email')->nullable();
            $table->integer('tel1')->nullable();
            $table->integer('tel2')->nullable();
            $table->integer('tel3')->nullable();
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
        Schema::dropIfExists('contact_us');
    }

}
