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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->text('name');
            $table->integer('amount');
            $table->decimal('price',10,2)->nullable();
            $table->decimal('total_price',10,2)->nullable();
            $table->string('status');
            $table->decimal('group',10,2)->nullable();
            $table->integer('equipment_unit_id')->nullable()->constrained('equipment_unit')->onDelete('set null');
            $table->integer('location_id')->nullable()->constrained('locations')->onDelete('set null');
            $table->integer('equipment_type_id')->nullable()->constrained('equipment_type')->onDelete('set null');
            $table->integer('title_id')->nullable()->constrained('titles')->onDelete('set null');
            $table->integer('user_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
