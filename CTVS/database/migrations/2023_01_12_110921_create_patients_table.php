<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('patient_id');
            $table->string('patient_name',20);
            $table->string('patient_email',50)->unique();
            $table->string('patient_password');
            $table->integer('patient_age');
            $table->string('patient_gender');
            $table->string('patient_address');
            $table->string('patient_city',50);
            $table->string('patient_phone_no',15);
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
        Schema::dropIfExists('patients');
    }
};
