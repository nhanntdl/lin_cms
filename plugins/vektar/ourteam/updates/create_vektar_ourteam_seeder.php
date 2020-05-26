<?php namespace Vektar\OurTeam\Updates;

use Vektar\OurTeam\Models\Theme as ThemeModel;
use Seeder;

class CreateVektarOurTeamSeeder extends Seeder
{
    public function run()
    {
        $jobstatusopen = ThemeModel::create([
            'id' => '1',
            'name' => 'Primary Theme',
        ]);

    }
}