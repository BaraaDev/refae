<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFrom130To140 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payouts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('vendor_id')->nullable();
            $table->decimal('amount',10,2)->nullable();
            $table->string('status',50)->nullable();
            $table->string("payout_method",50)->nullable();
            $table->text("account_info")->nullable();

            $table->text("note_to_admin")->nullable();
            $table->text("note_to_vendor")->nullable();
            $table->integer('last_process_by')->nullable();
            $table->timestamp("pay_date")->nullable();// admin pay date

            $table->integer('create_user')->nullable();
            $table->integer('update_user')->nullable();
            $table->timestamps();
        });

//        Schema::table('bookings', function (Blueprint $table) {
//            if (!Schema::hasColumn('bookings', 'payout_id')) {
//                $table->bigInteger('payout_id')->nullable();
//            }
//        });


        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'business_name')) {
                $table->string('business_name',255)->nullable();
            }
        });
        // Schema::table('property_translations', function (Blueprint $table) {
        //     if (!Schema::hasColumn('property_translations', 'extra_price')) {
        //         $table->text('extra_price')->nullable();
        //     }
        // });
        Schema::table('terms', function (Blueprint $table) {
            if (!Schema::hasColumn('terms', 'icon')) {
                $table->string('icon',50)->nullable();
            }
        });
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'object_child_id')) {
                $table->bigInteger('object_child_id')->nullable();
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
        Schema::dropIfExists('payouts');
    }
}
