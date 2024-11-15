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
        Schema::create('c_d_s', function (Blueprint $table) {
            $table -> id('idKaset');
            $table -> String('judul');
            $table -> integer('tahunTerbit');
            $table -> String('sutradara');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('c_d_s');
    }
};
