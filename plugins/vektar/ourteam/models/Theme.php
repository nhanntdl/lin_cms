<?php namespace Vektar\OurTeam\Models;

use Model;

/**
 * Model
 */
class Theme extends Model
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
    public $table = 'vektar_ourteam_theme';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
