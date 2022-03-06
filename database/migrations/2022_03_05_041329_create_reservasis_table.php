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
            $table->foreignId('id_tamu')->constrained('tamus')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tgl');
            $table->integer('no_kamar');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->enum('status', ['Check-in', 'Check-out']);
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
