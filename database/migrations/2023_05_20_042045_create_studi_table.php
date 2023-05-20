<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_matkul', 10);
            $table->string('dosen');
            $table->string('ruang', 10);
            $table->string('jadwal', 15);
            $table->string('periode', 15);
            $table->timestamps();

            $table->foreign('kode_matkul')->references('kode')->on('mata_kuliah')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studi');
    }
};
