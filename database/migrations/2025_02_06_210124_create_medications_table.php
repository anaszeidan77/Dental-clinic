<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->id();
            $table->string('medication_name');
            $table->text('description')->nullable();
            $table->string('dosage');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('medications');
    }
};
