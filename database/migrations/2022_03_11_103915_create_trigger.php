<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared('
            CREATE TRIGGER `update_jumlah_kamar` AFTER INSERT ON `reservasis` FOR EACH ROW 
            BEGIN 
                UPDATE kamars SET jumlah_kamar = jumlah_kamar - NEW.jumlah_kamar WHERE id = NEW.id_kamar;
            END
        ');

        DB::unprepared('
            CREATE TRIGGER `update_jumlah_kamar_delete` AFTER DELETE ON `reservasis` FOR EACH ROW 
            BEGIN 
                UPDATE kamars SET jumlah_kamar = jumlah_kamar + OLD.jumlah_kamar WHERE id = OLD.id_kamar;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `update_jumlah_kamar`');
        DB::unprepared('DROP TRIGGER `update_jumlah_kamar_delete`');
    }
};
