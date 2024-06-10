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
        Schema::create('tb_branches', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('phone', 20)->nullable();
            $table->integer('price_id')->unsigned()->nullable();
            $table->foreign('price_id')->references('id')->on('tb_prices')->onDelete('cascade');
            $table->string('detail')->nullable();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_branches');
    }
};
