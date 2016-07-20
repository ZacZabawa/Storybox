<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointtypeTekpointPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointtype_tekpoint', function (Blueprint $table) {
            $table->integer('pointtype_id')->unsigned()->index();
            $table->foreign('pointtype_id')->references('id')->on('pointtypes')->onDelete('cascade');
            $table->integer('tekpoint_id')->unsigned()->index();
            $table->foreign('tekpoint_id')->references('id')->on('tekpoints')->onDelete('cascade');
            $table->primary(['pointtype_id', 'tekpoint_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pointtype_tekpoint');
    }
}
