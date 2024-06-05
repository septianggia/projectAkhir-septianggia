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
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->timestamps();
        });
        Schema::table('peminjams', function (Blueprint $table) {
                    
        });

        
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropForeign('peminjams_barang_id_foreign');
        });
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropIndex('peminjams_barang_id_foreign');
        });
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropForeign('peminjams_barang_id_foreign');
        });
        Schema::table('peminjams', function(Blueprint $table) {
            $table->dropIndex('peminjams_barang_id_foreign');
        });
              
        Schema::dropIfExists('pemijams');
    }
};
