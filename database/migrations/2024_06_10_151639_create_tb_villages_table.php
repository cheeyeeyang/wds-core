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
        Schema::create('tb_villages', function (Blueprint $table) {
            $table->id();
            $table->string('village_name')->nullable();
            $table->integer('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('tb_districts')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_villages');
    }
};
