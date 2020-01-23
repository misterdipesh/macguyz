<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fileinfos', function (Blueprint $table) {
            $table->bigIncrements('fid');
            $table->integer('fpin');
            $table->integer('place');
            $table->boolean('problem');
            $table->string('problem_desc');



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
        Schema::dropIfExists('fileinfos');
    }
}
