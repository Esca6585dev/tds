<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 125);
            $table->string('last_name', 125)->nullable();

            $table->string('email', 125)->unique();
            $table->string('password', 125)->nullable();

            $table->string('phone_number', 125)->nullable();
            $table->string('address', 125)->nullable();

            $table->string('company_name', 125)->nullable();

            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
