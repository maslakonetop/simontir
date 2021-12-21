<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->string('koderekening');
            $table->string('subkegiatan');
            $table->string('pptk');
            $table->string('bulan');
            $table->string('anggaran');
            $table->string('sisaanggaran');
            $table->string('targetkeu');
            $table->string('realisasikeu');
            $table->string('targetfisik');
            $table->string('realisasifisik');
            $table->string('tahapanpekerjaan');
            $table->string('kendala');
            $table->string('tindaklanjut');
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
        Schema::dropIfExists('progress');
    }
}
