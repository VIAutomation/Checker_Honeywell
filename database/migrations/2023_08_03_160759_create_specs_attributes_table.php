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
        Schema::create('specs_attributes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('circuit_type_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('cover_style_id');
            $table->unsignedBigInteger('cell_type_id');
            $table->unsignedBigInteger('force_unit_id');
            $table->unsignedBigInteger('ot_type_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specs_attributes');
    }
};
