<?php namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class DomesticPrice extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_domestic_prices';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
