<?php namespace Vektar\OurTeam\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateVektarOurteamTheme extends Migration
{
    public function up()
    {
        Schema::create('vektar_ourteam_theme', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('name_colour')->nullable();
            $table->text('job_colour')->nullable();
            $table->text('social_colour')->nullable();
            $table->text('overlay_colour')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vektar_ourteam_theme');
    }
}
