<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesigntitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designtitles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dtitle');
            $table->string('description');
            $table->string('seotitle');
            $table->string('seokeyword');
            $table->string('seodescription');
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
        Schema::dropIfExists('designtitles');
    }
}
