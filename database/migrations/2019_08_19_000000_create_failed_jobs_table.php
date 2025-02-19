<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 36)->unique();
            $table->longText('payload'); // Correct type for payload
            $table->longText('exception'); // Correct type for exception
            $table->string('queue'); // Correct type for queue
            $table->timestamp('failed_at'); // Correct type for failed_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};