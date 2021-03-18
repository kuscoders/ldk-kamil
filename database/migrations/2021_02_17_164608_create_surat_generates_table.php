<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratGeneratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_generates', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_surat');
            $table->date('tgl_masuk');
            $table->string('perihal');
            $table->string('deskripsi');
            $table->string('tujuan');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_generates');
    }
}
