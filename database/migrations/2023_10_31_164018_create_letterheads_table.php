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
        Schema::create('letterheads', function (Blueprint $table) {
            $table->id();

            $table->string('company_name_tm');
            $table->string('company_name_en');

            $table->string('address_tm');
            $table->string('address_en');

            $table->string('phone_number_tm');
            $table->string('phone_number_en');

            $table->string('email_tm');
            $table->string('email_en');

            $table->string('image');

            $table->unsignedBigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->unsigned();

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
        Schema::dropIfExists('letterheads');
    }
};
