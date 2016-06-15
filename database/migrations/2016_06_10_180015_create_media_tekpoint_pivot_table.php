<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTekpointPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_tekpoint', function (Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
            $table->integer('tekpoint_id')->unsigned()->index();
            $table->foreign('tekpoint_id')->references('id')->on('tekpoints')->onDelete('cascade');
            $table->primary(['media_id', 'tekpoint_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media_tekpoint');
    }
}
