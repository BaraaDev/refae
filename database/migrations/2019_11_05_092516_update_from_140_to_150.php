<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFrom140To150 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attrs', function (Blueprint $table) {
            if (!Schema::hasColumn('attrs', 'display_type')) {
                $table->string('display_type',255)->nullable();
            }
            if (!Schema::hasColumn('attrs', 'hide_in_single')) {
                $table->tinyInteger('hide_in_single')->nullable();
            }
        });
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'number')) {
                $table->smallInteger('number')->nullable();
            }
        });
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'verify_submit_status')) {
                $table->string('verify_submit_status',30)->nullable();
            }
            if (!Schema::hasColumn('users', 'is_verified')) {
                $table->smallInteger('is_verified')->nullable();
            }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
