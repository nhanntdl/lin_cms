<?php namespace Vektar\OurTeam\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateVektarOurteamTeam extends Migration
{
    public function up()
    {
        Schema::create('vektar_ourteam_team', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vektar_ourteam_team');
    }
}
