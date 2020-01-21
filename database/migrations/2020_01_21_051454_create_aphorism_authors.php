<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAphorismAuthors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aphorism_authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('machine_name');
            $table->integer('aphorisms_id')->unsigned()->default(1);
            $table->foreign('aphorisms_id')->references('id')->on('aphorisms');
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
        Schema::dropIfExists('aphorism_authors');
    }
}
