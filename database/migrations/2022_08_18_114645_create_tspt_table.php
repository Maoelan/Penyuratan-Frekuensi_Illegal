<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tspt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pemeriksaan');
            $table->string('metode_pemeriksaan', 30);
            $table->string('client_id', 30);
            $table->string('client_name', 50);
            $table->string('nama_stasiun', 50);
            $table->longText('alamat_stasiun');
            $table->string('koordinat', 50);
            $table->string('stasiun_lawan', 50);
            $table->double('tx');
            $table->double('rx');
            $table->double('bw');
            $table->string('nomer_isr', 50);
            $table->date('mulai_beroperasi');
            $table->longText('keterangan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tspt');
    }
};