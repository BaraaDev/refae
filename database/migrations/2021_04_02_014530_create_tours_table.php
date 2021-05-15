<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('video');
            $table->integer('days');
            $table->text('address');
            $table->integer('price');
            $table->string('status');
            $table->boolean('is_featured');
            $table->string('file');
            $table->text('gallery');
            $table->string('image_id');
            $table->string('slug');
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
        Schema::dropIfExists('tours');
    }
}
