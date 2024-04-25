<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasos_advanced_warfare', function (Blueprint $table) {
            $table->id();
            $table->integer('orden');
            $table->string('descripcion');
            $table->unsignedBigInteger('advanced_warfare_id');

            $table->foreign('advanced_warfare_id')->references('id')->on('advanced_warfare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasos_advanced_warfare');
    }
};
