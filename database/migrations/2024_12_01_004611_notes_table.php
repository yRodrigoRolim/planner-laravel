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
        Schema::create('notes', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('image'); 
            $table->date('data');
            $table->time('hour')->nullable(); 
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade'); 
            $table->timestamps(); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
