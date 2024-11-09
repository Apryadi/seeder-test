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
        Schema::create('skripsis', function (Blueprint $table) {
            $table -> id('idSkripsi');
            $table -> String('judul');
            $table -> String('namaSiswa');
            $table -> String('namaPembimbing');
            $table -> date('tanggalSidangSkripsi');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('skripsis');
    }
};
