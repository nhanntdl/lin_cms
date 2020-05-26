<?php namespace Vektar\OurTeam\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateVektarOurteamEmployee extends Migration
{
    public function up()
    {
        Schema::create('vektar_ourteam_employee', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('job_role')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('text_colours')->nullable();
            $table->integer('team_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vektar_ourteam_employee');
    }
}
