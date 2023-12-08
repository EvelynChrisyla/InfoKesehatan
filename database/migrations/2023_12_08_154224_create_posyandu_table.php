<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posyandus', function (Blueprint $table) {
            $table->id();
            $table->integer('laki_laki');
            $table->integer('perempuan');
            $table->integer('stunting');
            $table->integer('normal');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posyandus');
    }
};
