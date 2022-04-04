<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(
            '
        DROP PROCEDURE IF EXISTS `selectTamu`;  
        CREATE PROCEDURE selectTamu()
        BEGIN
        SELECT nama_tamu,tipe_kamar FROM reservasis JOIN kamars ON reservasis.id_kamar = kamars.id;
        END
        '
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
