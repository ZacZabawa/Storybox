<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToTekPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('tekpoints', function($table) {
            
});

         DB::statement('ALTER TABLE tekpoints ADD COLUMN geomPoint geometry(Point,3005);');
         DB::statement('ALTER TABLE tekpoints ADD COLUMN geomLine geometry(LINESTRING,3005);');
         DB::statement('ALTER TABLE tekpoints ADD COLUMN geomPolygon geometry(Polygon,3005);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
         DB::statement('ALTER TABLE tekpoints DROP COLUMN geomPoint RESTRICT;');
         DB::statement('ALTER TABLE tekpoints DROP COLUMN geomLine RESTRICT;');
         DB::statement('ALTER TABLE tekpoints DROP COLUMN geomPolygon RESTRICT;');
    }
}
