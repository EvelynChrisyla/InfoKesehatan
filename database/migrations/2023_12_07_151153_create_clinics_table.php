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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('foto');
            $table->string('nomor_telepon');
            $table->string('jam_buka');
            $table->string('link_alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};


// class ModifyClinicsTable extends Migration
// {
//     public function up()
//     {
//         Schema::table('clinics', function (Blueprint $table) {
//             $table->dropColumn(['latitude', 'longitude']); // Hapus kolom latitude dan longitude
//             $table->string('nomor_telepon')->nullable();
//             $table->string('jam_buka')->nullable();
//         });
//     }

//     public function down()
//     {
//         Schema::table('clinics', function (Blueprint $table) {
//             $table->decimal('latitude', 10, 8);
//             $table->decimal('longitude', 11, 8);
//             $table->dropColumn(['nomor_telepon', 'jam_buka']); // Rollback: hapus kolom nomor_telepon dan jam_buka
//         });
//     }
// }