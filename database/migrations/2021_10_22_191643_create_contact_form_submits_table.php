<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormSubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_form_submits', function (Blueprint $table) {
            $table->id();
            $table->string('reserv_name')->nullable();
            $table->string('date')->nullable();
            $table->string('reserv_time')->nullable();
            $table->string('reserv_persons')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('table')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('place')->nullable();
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
        Schema::dropIfExists('contact_form_submits');
    }
}
