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
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('isbn');
        $table->string('title');
        $table->string('penulis');
        $table->integer('tahunTerbit');
        $table->string('penerbit');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
