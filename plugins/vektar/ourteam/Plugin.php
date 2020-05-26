<?php namespace Vektar\OurTeam;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Our Team',
            'description' => 'Display an Our Team section on your website with ease',
            'author' => 'Vektar Design',
            'icon' => 'icon-users',
        ];
    }

    public function registerComponents()
    {
    	return [
            'Vektar\OurTeam\Components\OurTeam' => 'ourteam'
        ];
    }

    public function registerPermissions()
    {
        return [
            'vektar.ourteam.manage_ourteam' => [
                'tab'   => 'vektar.ourteam::lang.plugin.name',
                'label' => 'vektar.ourteam::lang.permissions.ourteam-main',
            ],
            'vektar.ourteam.manage_team' => [
                'tab'   => 'vektar.ourteam::lang.plugin.name',
                'label' => 'vektar.ourteam::lang.permissions.ourteam-team',
            ],
            'vektar.ourteam.manage_theme' => [
                'tab'   => 'vektar.ourteam::lang.plugin.name',
                'label' => 'vektar.ourteam::lang.permissions.ourteam-theme',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'ourteam-main' => [
                'label' => 'vektar.ourteam::lang.nav.main',
                'url' => Backend::url('vektar/ourteam/teams'),
                'permissions' => ['vektar.ourteam.manage_ourteam'],
                'icon' => 'icon-users',
                'order' => 500,
                'sideMenu' => [
                	'ourteam-team' => [
                		'label' => 'vektar.ourteam::lang.nav.team',
                        'url' => Backend::url('vektar/ourteam/teams'),
                        'permissions' => ['vektar.ourteam.manage_team'],
                        'icon' => 'icon-user',
                	],
                	'ourteam-theme' => [
                		'label' => 'vektar.ourteam::lang.nav.theme',
                        'url' => Backend::url('vektar/ourteam/themes/update/1'),
                        'permissions' => ['vektar.ourteam.manage_theme'],
                        'icon' => 'icon-sitemap',
                	],
                ]
            ],
        ];
    }
}
