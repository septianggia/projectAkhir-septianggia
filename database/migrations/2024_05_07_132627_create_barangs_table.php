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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           $table->string('description')->nullable();
           $table->double('price');
            $table->string('tgl_peminjaman');      
            $table->timestamps();
           
        });
       
       

    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        

        Schema::dropIfExists('barangs');

    }
};
