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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments("id_siswa");
            $table->string("nis", 9);
            $table->string("nama", 100);
            $table->string("jenis_kelamin", 10);
            $table->string("no_telp", 13);
            $table->string("alamat", 200);
            $table->integer("berat_badan");
            $table->integer("tinggi_badan");
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
