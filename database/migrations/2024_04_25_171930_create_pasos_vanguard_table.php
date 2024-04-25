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
        Schema::create('pasos_vanguard', function (Blueprint $table) {
            $table->id();
            $table->integer('orden');
            $table->string('descripcion');
            $table->unsignedBigInteger('vanguard_id');

            $table->foreign('vanguard_id')->references('id')->on('vanguard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasos_vanguard');
    }
};
