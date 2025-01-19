<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id('equipment_id');
            $table->string('equipment_number', 100);
            $table->text('equipment_name');
            $table->decimal('equipment_unit_price', 10, 2)->nullable();
            $table->text('description')->nullable();
            $table->foreignID('user_id')->nullable()->references('user_id')->on('users')->onDelete('cascade'); // แก้ให้ถูกต้อง
            $table->foreignID('location_of_equipment_id')->nullable()->references('location_of_equipment_id')->on('location_of_equipment')->onDelete('cascade');
            $table->foreignID('equipment_unit_id')->nullable()->references('equipment_unit_id')->on('equipment_unit')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};
