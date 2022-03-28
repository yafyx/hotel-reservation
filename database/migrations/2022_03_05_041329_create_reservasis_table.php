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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id')->uniqid();
            $table->string('nama_tamu');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('no_tlp');
            $table->foreignId('id_kamar')->constrained('kamars')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('jumlah_kamar');
            $table->longText('permintaan_khusus');
            $table->integer('total_harga');
            $table->dateTime('tgl_checkin');
            $table->dateTime('tgl_checkout');
            $table->enum('status', ['menunggu checkin', 'checkin', 'checkout', 'batal']);
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
        Schema::dropIfExists('reservasis');
    }
};
