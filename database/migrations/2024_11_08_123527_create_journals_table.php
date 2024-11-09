<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('journals', function (Blueprint $table) {
            $table -> id('isbn');
            $table -> String('title');
            $table -> String('penulis');
            $table -> integer('tahunTerbit');
            $table -> String('penerbit');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
