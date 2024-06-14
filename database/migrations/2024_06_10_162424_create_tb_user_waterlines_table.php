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
        Schema::create('tb_user_waterlines', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id')->unsigned()->nullable();
            $table->foreign('employee_id')->references('id')->on('tb_employees')->onDelete('cascade');
            $table->integer('waterline_id')->unsigned()->nullable();
            $table->foreign('waterline_id')->references('id')->on('tb_water_lines')->onDelete('cascade');
            $table->string('des')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_user_waterlines');
    }
};
