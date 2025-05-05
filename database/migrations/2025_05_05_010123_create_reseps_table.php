<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->string('judul_resep');
            $table->string('kategori');
            $table->text('bahan');
            $table->text('langkah_pembuatan');
            $table->integer('waktu_memasak');
            $table->string('penulis');
            $table->string('tingkat_kesulitan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
?>