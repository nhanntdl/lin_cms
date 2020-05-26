<?php namespace Vektar\OurTeam\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Teams extends Controller
{
    public $implement = [
    	'Backend\Behaviors\ListController',
    	'Backend\Behaviors\FormController',
    	'Backend.Behaviors.RelationController'
	];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relations.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Vektar.OurTeam', 'ourteam-main', 'ourteam-team');
    }
}
