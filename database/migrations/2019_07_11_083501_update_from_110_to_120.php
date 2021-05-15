<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFrom110To120 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->createTranslationTables();
    }

    public function createTranslationTables(){

        Schema::create('core_page_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title',255)->nullable();
            $table->text('content')->nullable();
            $table->text('short_desc')->nullable();

            $table->bigInteger('create_user')->nullable();
            $table->bigInteger('update_user')->nullable();

            $table->unique(['origin_id', 'locale']);

            $table->timestamps();
        });

        Schema::create('news_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title',255)->nullable();
            $table->text('content')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });

        Schema::create('news_category_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name',255)->nullable();
            $table->text('content')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });

        Schema::create('tag_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->string('name',255)->nullable();
            $table->text('content')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });

        Schema::create('core_menu_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->longText('items')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });
        Schema::create('core_template_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('origin_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title',255)->nullable();
            $table->longText('content')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });

        Schema::create('location_translations', function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('origin_id')->nullable();
            $table->string('locale',10)->nullable();

            $table->string('name',255)->nullable();
            $table->text('content')->nullable();

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();

            $table->unique(['origin_id', 'locale']);
            $table->timestamps();
        });

        Schema::create('attrs_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('origin_id')->nullable();
            $table->string('locale',10)->nullable();

            $table->string('name',255)->nullable();

            $table->bigInteger('create_user')->nullable();
            $table->bigInteger('update_user')->nullable();
            $table->unique(['origin_id', 'locale']);
            $table->timestamps();
        });

        Schema::create('terms_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('origin_id')->nullable();
            $table->string('locale',10)->nullable();

            $table->string('name',255)->nullable();
            $table->text('content')->nullable();

            $table->bigInteger('create_user')->nullable();
            $table->bigInteger('update_user')->nullable();
            $table->unique(['origin_id', 'locale']);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *y
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core_page_translations');
        Schema::dropIfExists('news_translations');
        Schema::dropIfExists('news_category_translations');
        Schema::dropIfExists('tag_translations');
        Schema::dropIfExists('core_menu_translations');
        Schema::dropIfExists('core_template_translations');
        Schema::dropIfExists('location_translations');
        Schema::dropIfExists('attrs_translations');
        Schema::dropIfExists('terms_translations');
    }
}
