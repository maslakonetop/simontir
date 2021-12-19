<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_models', function (Blueprint $table) {
            $table->id();
            $table->string('koderekening');
            $table->string('subkegiatan');
            $table->string('bidang');
            $table->string('bulan1');
            $table->string('targetkeuangan1');
            $table->string('task1');
            $table->string('bobot1');
            $table->string('bulan2');
            $table->string('targetkeuangan2');
            $table->string('task2');
            $table->string('bobot2');
            $table->string('bulan3');
            $table->string('targetkeuangan3');
            $table->string('task3');
            $table->string('bobot3');
            $table->string('bulan4');
            $table->string('targetkeuangan4');
            $table->string('task4');
            $table->string('bobot4');
            $table->string('bulan5');
            $table->string('targetkeuangan5');
            $table->string('task5');
            $table->string('bobot5');
            $table->string('bulan6');
            $table->string('targetkeuangan6');
            $table->string('task6');
            $table->string('bobot6');
            $table->string('bulan7');
            $table->string('targetkeuangan7');
            $table->string('task7');
            $table->string('bobot7');
            $table->string('bulan8');
            $table->string('targetkeuangan8');
            $table->string('task8');
            $table->string('bobot8');
            $table->string('bulan9');
            $table->string('targetkeuangan9');
            $table->string('task9');
            $table->string('bobot9');
            $table->string('bulan10');
            $table->string('targetkeuangan10');
            $table->string('task10');
            $table->string('bobot10');
            $table->string('bulan11');
            $table->string('targetkeuangan11');
            $table->string('task11');
            $table->string('bobot11');
            $table->string('bulan12');
            $table->string('targetkeuangan12');
            $table->string('task12');
            $table->string('bobot12]');
            $table->string('anggaran');
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
        Schema::dropIfExists('data_models');
    }
}
