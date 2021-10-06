<?php

namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class Branch extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_branches';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $belongsTo = [
        'vendor' => [
            'Kju\Express\Models\DeliveryOrder',
            'key' => 'vendor_id'
        ],
    ];

    public function filterFields($fields, $context = null)
    {
        if ($context == 'update') {
            // $fields->id->disabled = true;
            $fields->name->disabled = true;
        }
    }
}
