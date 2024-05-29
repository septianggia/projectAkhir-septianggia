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
        Schema::create('peminjamans', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->string('status');
            $table->timestamps();
        });
        Schema::table('peminjamans', function (Blueprint $table) {
                    
        });


    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropForeign('peminjamans_barang_id_foreign');
        });
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropIndex('peminjamans_barang_id_foreign');
        });
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropForeign('peminjamans_barang_id_foreign');
        });
        Schema::table('peminjamans', function(Blueprint $table) {
            $table->dropIndex('peminjamans_barang_id_foreign');
        });
              
        Schema::dropIfExists('pemijamans');
    }
};
