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
            $table->foreignId('id_kamar')->constrained('kamars')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_pemesan')->constrained('tamus')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_tamu')->constrained('tamus')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('tgl');
            $table->integer('jumlah_kamar');
            $table->dateTime('tgl_checkin');
            $table->dateTime('tgl_checkout');
            $table->boolean('status');
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
