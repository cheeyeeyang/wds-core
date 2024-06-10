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
        Schema::create('tb_products', function (Blueprint $table) {
            $table->id();
            $table->string('barcode')->nullable();
            $table->string('product_name')->nullable();
            $table->integer('unit_id')->unsigned()->nullable();
            $table->foreign('unit_id')->references('id')->on('tb_units')->onDelete('cascade');
            $table->integer('price_cost')->nullable();
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_products');
    }
};
