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
        Schema::create('equipment_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->decimal('total_price',10,2)->nullable();
            $table->foreignId('equipment_unit_id')->nullable()->constrained('equipment_units')->onDelete('set null');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_types');
    }
};
