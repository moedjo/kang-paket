<?php namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $morphTo = [
        'orderable' => []
    ];
}
