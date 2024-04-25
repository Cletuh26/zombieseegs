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
        Schema::create('pasos_world_war_2', function (Blueprint $table) {
            $table->id();
            $table->integer('orden');
            $table->string('descripcion');
            $table->unsignedBigInteger('world_war_2_id');

            $table->foreign('world_war_2_id')->references('id')->on('world_war_2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasos_world_war_2');
    }
};
