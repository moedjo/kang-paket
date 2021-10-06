<?php

namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class Vendor extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_vendors';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $hasMany = [
        'branches' => ['KP\Express\Models\Branch']
    ];

    public function filterFields($fields, $context = null)
    {
        if ($context == 'update') {
            // $fields->id->disabled = true;
            $fields->name->disabled = true;
        }
    }
}
