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
    public $rules = [
        'name' => 'required|unique:kp_express_vendors',
        'logo' => 'required'
    ];

    public $hasMany = [
        'branches' => ['KP\Express\Models\Branch']
    ];

    public $attachOne = [
        'logo' => ['System\Models\File', 'public' => true]
    ];

    public function filterFields($fields, $context = null)
    {
        if ($context == 'update') {
            $fields->name->disabled = true;
        }
    }
}
