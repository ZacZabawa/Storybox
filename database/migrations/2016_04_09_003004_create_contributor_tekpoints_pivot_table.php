<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributorTekpointsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributor_tekpoints', function (Blueprint $table) {
            $table->integer('contributor_id')->unsigned()->index();
            $table->foreign('contributor_id')->references('id')->on('contributors')->onDelete('cascade');
            $table->integer('tekpoints_id')->unsigned()->index();
            $table->foreign('tekpoints_id')->references('id')->on('tekpoints')->onDelete('cascade');
            $table->primary(['contributor_id', 'tekpoints_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributor_tekpoints');
    }
}
