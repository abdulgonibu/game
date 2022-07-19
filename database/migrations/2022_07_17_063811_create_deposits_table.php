<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('marchent_number')->nullable();
            $table->string('account_number')->nullable();
            $table->string('amount')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->default(2)->comment('1=published, 2=pending');
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
        Schema::dropIfExists('deposits');
    }
}
