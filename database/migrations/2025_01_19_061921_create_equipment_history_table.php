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
        Schema::create('equipment_history', function (Blueprint $table) {
            $table->id('equipment_history_id');
            $table->foreignID('equipment_history_type_id')->references('equipment_history_type_id')->on('equipment_history_type')->onDelete('cascade');
            $table->foreignId('equipment_id')->references('equipment_id')->on('equipment')->onDelete('cascade');
            $table->integer('total');
            $table->foreignId('document_id')->references('document_id')->on('document')->onDelete('cascade')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment_history');
    }
};
