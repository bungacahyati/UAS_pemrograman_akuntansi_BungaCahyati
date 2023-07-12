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
        Schema::create('tbl_indukuser_bunga', function (Blueprint $table) {
            $table->id();
            $table->string('id_user', '15');
            $table->string('username', '15');
            $table->date('tanggal_lahir', '15');
     
            $table->string('nama_lengkap', '15');
            $table->string('email', '35');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_indukuser_bunga');
    }
};
