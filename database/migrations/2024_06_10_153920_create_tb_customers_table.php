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
        Schema::create('tb_customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('alley')->nullable();
            $table->integer('village_id')->unsigned()->nullable();
            $table->foreign('village_id')->references('id')->on('tb_villages')->onDelete('cascade');
            $table->string('h_number')->nullable();
            $table->string('phone',30);
            $table->integer('b_amount')->nullable();
            $table->integer('price_id')->unsigned()->nullable();
            $table->foreign('price_id')->references('id')->on('tb_prices')->onDelete('cascade');
            $table->decimal('lat',18, 15)->nullable();
            $table->decimal('lng',17, 14)->nullable();
            $table->integer('user_waterline_id')->unsigned()->nullable();
            $table->foreign('user_waterline_id')->references('id')->on('tb_water_lines')->onDelete('cascade');
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_customers');
    }
};
