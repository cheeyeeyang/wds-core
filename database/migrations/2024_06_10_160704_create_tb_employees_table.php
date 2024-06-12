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
        Schema::create('tb_employees', function (Blueprint $table) {
           //$table->id();
            $table->string('em_id')->primary();
            $table->string('fullname')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('position_id')->unsigned()->nullable();
            $table->foreign('position_id')->references('id')->on('tb_positions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_employees');
    }
};
