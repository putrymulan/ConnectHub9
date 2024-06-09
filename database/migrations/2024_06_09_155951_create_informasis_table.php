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
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('kategori', 50);
            $table->string('nomorhp',15);
            $table->bigInteger('seat');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id_categories')->on('kategoris')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('harga');
            $table->string('status', 50);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasis');
    }
};
