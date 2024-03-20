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
        Schema::create('variation_value_chain', function (Blueprint $table) {
            $table->unsignedBigInteger('value_chain_id');
            $table->unsignedBigInteger('variation_id');

            $table->foreign('value_chain_id')->references('id')->on('value_chains')->onDelete('cascade');
            $table->foreign('variation_id')->references('id')->on('variations')->onDelete('cascade');

            $table->primary(['value_chain_id', 'variation_id']);;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_value_chain');
    }
};
