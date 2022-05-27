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
        Schema::create('bajus', function (Blueprint $table) {
            $table->id();
            // $table->string('jenisBaju');
            $table->string('kodeBaju');
            $table->index('kodeBaju');
            $table->string('foto');
            $table->string('ukuran');
            $table->integer('jumlah');
            $table->timestamps();
            // $table->index('kodeBaju');

            $table->foreign('kodeBaju')
                    ->references('kodeBaju')->on('kodes');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bajus');
    }
};
