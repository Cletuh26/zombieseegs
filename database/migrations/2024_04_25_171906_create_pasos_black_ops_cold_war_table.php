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
        Schema::create('pasos_black_ops_cold_war', function (Blueprint $table) {
            $table->id();
            $table->integer('orden');
            $table->string('descripcion');
            $table->unsignedBigInteger('black_ops_cold_war_id');

            $table->foreign('black_ops_cold_war_id')->references('id')->on('black_ops_cold_war');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasos_black_ops_cold_war');
    }
};
