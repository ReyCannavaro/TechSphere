<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gadgets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('categories_id')->constrained('categories')->onDelete('cascade');
            $table->year('tahun_keluaran');
            $table->decimal('harga', 15, 2); // untuk menyimpan angka besar seperti 36999000.00
            $table->text('description');
            $table->string('image')->nullable();
            $table->timestamps(); // menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gadgets');
    }
};
