<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsarchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsarchives', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('title', 50);
            // $table->string('blah', 50);
            $table->string('headline');
            // $table->string('blahblah');
            $table->string('deck', 400)->nullable();
            $table->string('byline');
            // $table->date('created_at');
            $table->string('dateline')->nullable();
            $table->text('body');
            $table->string('iso_three', 3);
            $table->string('url')->nullable();
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
        Schema::dropIfExists('newsarchives');
    }
}