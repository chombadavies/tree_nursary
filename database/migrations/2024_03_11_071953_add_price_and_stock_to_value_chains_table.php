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
        Schema::table('value_chains', function (Blueprint $table) {
            $table->decimal('price', 10, 2)->nullable();
            $table->enum('variation',['grafted','not_grafted'])->nullable();
            $table->integer('stock_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('value_chains', function (Blueprint $table) {
            //
        });
    }
};
