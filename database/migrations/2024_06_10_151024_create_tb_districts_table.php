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
        Schema::create('tb_districts', function (Blueprint $table) {
            $table->id();
            $table->string('district_name')->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->foreign('province_id')->references('id')->on('tb_provinces')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_districts');
    }
};
