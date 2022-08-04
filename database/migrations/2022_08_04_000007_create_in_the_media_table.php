<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInTheMediaTable extends Migration
{
    public function up()
    {
        Schema::create('in_the_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('media_house')->nullable();
            $table->string('category')->nullable();
            $table->longText('media_url_link');
            $table->string('date')->nullable();
            $table->longText('slug')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
