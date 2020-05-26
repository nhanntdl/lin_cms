<?php namespace Vektar\OurTeam\Components;

use Cms\Classes\ComponentBase;
use Vektar\OurTeam\Models\Team as TeamModel;
use Vektar\OurTeam\Models\Theme as ThemeModel;

class OurTeam extends ComponentBase
{
    /**
    * @var 
    */
    public $ourteam;
    public $theme;

    public function componentDetails()
    {
        return [
            'name' => 'Our Team',
            'description' => 'A simple plugin which provides an Our Team section for you to show off your employees.'
        ];
    }

    public function defineProperties()
    {
        return [
            'team' => [
                'title' => 'Team Name',
                'description' => 'Select which options you would like to use.',
                'placeholder' => 'Select Team',
                'type' => 'dropdown'
            ],
            'results' => [
                'title' => 'Number of Team Members',
                'description' => 'How many images to display',
                'placeholder' => 'Choose how many members you would like to display.',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'Only numbers allowed',
                'default' => 0,
            ],
            'sortOrder' => [
                'title' => 'Sort Team Members',
                'description' => 'Sort Team Members',
                'placeholder' => 'Choose how many member you would like to be displayed.',
                'type' => 'dropdown',
                'default' => 'name asc',
            ],
        ];
    }

    public function getTeamOptions()
    {
        return TeamModel::lists('name', 'id');
    }

    public function GetSortOrderOptions()
    {
        return [
            'name asc' => 'Name (ascesnding)',
            'name desc' => 'Name (descesnding)',
        ];
    }

    protected function loadTheme()
    {
        return ThemeModel::all();
    }

    public function onRun()
    {
        $team = $this->property('team');
        $results = $this->property('results');
        $sortOrder = $this->property('sortOrder');

        $TeamQuery = TeamModel::where('id', '=', $team)
            ->with(['employee' => function($query) use ($results, $sortOrder) {
                
                // if asc is selected then order by asc

                if ($sortOrder == 'name asc') 
                {
                    $query->orderBy('name', 'asc');
                }

                // if desc is selected then order by desc

                if ($sortOrder == 'name desc') 
                {
                    $query->orderBy('name', 'desc');
                }                

                // if results is 0 then display all

                if ($results > 0) 
                {
                    $query->take($results);
                }

            }]);

        $this->ourteam = $TeamQuery->first();
        $this->theme = $this->loadTheme();

        $this->addCss('/plugins/vektar/ourteam/assets/css/plugin.css');
    }
}