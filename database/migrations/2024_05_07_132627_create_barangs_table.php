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
            $table->string('name_barang');
            $table->string('keterangan')->nullable();
            $table->integer('stock');
            $table->string('status');
            $table->string('jumlah');
            $table->date('tgl_peminjaman');      
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
