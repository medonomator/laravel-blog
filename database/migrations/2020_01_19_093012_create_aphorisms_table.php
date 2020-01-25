<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAphorismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aphorisms', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('body');
            $table->integer('authors_id')->unsigned()->default(1);
            $table->foreign('authors_id')->references('id')->on('aphorisms_authors');
            $table->integer('categories_id')->unsigned()->default(1);
            $table->foreign('categories_id')->references('id')->on('aphorisms_categories');
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
        Schema::dropIfExists('aphorisms');
    }
}
