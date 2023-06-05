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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id('hospital_id');
            $table->string('hospital_name',30);
            $table->string('hospital_email',50)->unique();
            $table->string('hospital_password');
            $table->string('hospital_pic');
            $table->text('hospital_address');
            $table->string('hospital_city',50);
            $table->boolean('hospital_approval_status')->default(0);
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
        Schema::dropIfExists('hospitals');
    }
};
