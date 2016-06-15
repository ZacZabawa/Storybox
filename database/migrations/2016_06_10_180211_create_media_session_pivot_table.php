<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaSessionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_session', function (Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
            $table->integer('session_id')->unsigned()->index();
            $table->foreign('session_id')->references('id')->on('sessions')->onDelete('cascade');
            $table->primary(['media_id', 'session_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('media_session');
    }
}
