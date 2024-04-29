<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->string('nama_toko');
            $table->enum('kategori_toko', ['elektronik','otomotif','sembako','fashion','makanan','obat','aksesoris','perabotan']);
            $table->text('desc_toko');
            $table->date('hari_buka');
            $table->date('hari_libur');
            $table->time('jam_libur');
            $table->time('jam_buka');
            $table->boolean('status_aktif')->default('0');
            $table->string('icon_toko')->default('default-toko.png');
            $table->foreign('id_user')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('toko');
    }
}
