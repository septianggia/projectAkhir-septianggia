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
        Schema::create('detail_pinjams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('peminjaman_id')->unsigned();
            $table->bigInteger('barang_id')->unsigned();
            $table->string('jumlah');
            $table->string('peminjam');
            $table->timestamps();

        });
        Schema::table('detail_pinjams', function(Blueprint $table) {
            $table->foreign('peminjaman_id')->references('id')->on('peminjamans')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');

        $table->foreign('barang_id')->references('id')->on('barangs')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_pinjams', function(Blueprint $table) {
            $table->dropForeign('peminjaman_detail_pinjam_id_foreign');
        });
   
        Schema::table('detail_pinjams', function(Blueprint $table) {
            $table->dropIndex('detail_pinjams_peminjaman_id_foreign');
        });
        Schema::table('detail_pinjams', function(Blueprint $table) {
            $table->dropForeign('detail_pinjams_barang_id_foreign');
        });
        Schema::table('detail_pinjams', function(Blueprint $table) {
            $table->dropIndex('detail_pinjams_barang_id_foreign');
        });
       
        Schema::dropIfExists('detail_pinjams');
    }
};
