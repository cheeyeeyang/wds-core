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
        Schema::create('tb_payments', function (Blueprint $table) {
            $table->id();
            $table->string('billid')->nullable();
            $table->date('datetime')->nullable();
            $table->integer('price_amount')->nullable();
            $table->integer('price_type')->nullable();
            $table->integer('price_location')->nullable();
            $table->integer('sale_type')->nullable();
            $table->integer('app_pay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_payments');
    }
};
