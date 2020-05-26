<?php namespace Vektar\OurTeam\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vektar_ourteam_team';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

    public $hasMany = [
        'employee' => [
            'Vektar\OurTeam\Models\Employee',
        ],
        'theme' => [
            'Vektar\OurTeam\Models\Theme',
        ],
    ];
}
