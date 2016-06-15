<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
class CreatetekpointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tekpoints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tradPlaceName', 60)->nullable();
            $table->string('name', 60)->nullable();
            $table->string('description', 500)->nullable();
            $table->double('y_proj', 15, 8);
            $table->double('x_proj', 15, 8);
            $table->string('icon');
            $table->string('firstHand')->nullable();
            $table->string('secondHand')->nullable();
            $table->string('zid');  
            $table->string('elev');        
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
        Schema::dropIfExists('tekpoints');
    }
}
