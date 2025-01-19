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
        Schema::create('document', function (Blueprint $table) {
            $table->id('document_id');
            $table->string('document_path', 300);
            $table->foreignID('document_type_id')->references('document_type_id')->on('document_type')->onDelete('cascade');
            $table->date('document_date');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('document');
    }
};