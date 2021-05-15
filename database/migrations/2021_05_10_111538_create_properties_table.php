<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('video');
            $table->string('bed');
            $table->string('bathroom');
            $table->string('square');
            $table->string('location_id');
            $table->string('address');
            $table->string('price');
            $table->string('status');
            $table->boolean('is_featured');
            $table->string('file');
            $table->text('gallery');
            $table->string('image_id');
            $table->string('slug');
            $table->string('create_user');
            $table->string('views')->default('1');
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
        Schema::dropIfExists('properties');
    }
}
