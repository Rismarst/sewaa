<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailsewas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kamera_id');
            $table->date('tanggal_sewa');
            $table->string('nama_customer');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->integer('no_telepon');
            $table->integer('no_ktp');
            $table->integer('jumlah_hari');
            $table->timestamps();

            $table->foreign('kamera_id')->references('id')
                ->on('kameras')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailsewas');
    }
}
