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
            $table->bigIncrements('id')->autoIncrement();  
            $table->integer('fid');  

            $table->integer('fpin');   
            $table->integer('place')->nullable($value = true); 
            $table->boolean('problem')->nullable($value = true); 
            $table->text('problem_desc')->nullable($value = true); 



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
