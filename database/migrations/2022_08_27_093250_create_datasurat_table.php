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
        Schema::create('datasurat', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nama_pemilik', 50);
            $table->string('nik_pemilik', 30);
            $table->string('jenis_kelamin', 30);
            $table->string('agama', 50);
            $table->string('pekerjaan', 50);
            $table->string('jabatan');
            $table->string('alamat', 50);
            $table->string('bertindak_untuk', 50);

            $table->string('nama_pemeriksa', 50);
            $table->string('nip_pemeriksa', 50);

            $table->string('nama_kbalai', 50);
            $table->string('nip_kbalai', 50);
            $table->softDeletes();
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
        Schema::dropIfExists('datasurat');
    }
};
