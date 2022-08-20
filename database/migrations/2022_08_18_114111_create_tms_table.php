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
        Schema::create('tms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pemeriksaan');
            $table->string('metode_pemeriksaan', 30);
            $table->string('client_name', 50);
            $table->string('kategori_pengguna', 50);
            $table->string('merk_perangkat', 50);
            $table->string('tipe_perangkat', 50);
            $table->string('no_seri', 50);
            $table->string('no_sertifikat', 50);
            $table->string('jenis_perangkat', 50);
            $table->string('status', 30);
            $table->longText('keterangan');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tms');
    }
};