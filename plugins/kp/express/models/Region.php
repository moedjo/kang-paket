<?php

namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class Region extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_regions';
    public $incrementing = false;

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $belongsTo = [
        'parent' => ['KP\Express\Models\Region', 'key' => 'parent_id']
    ];

    public function getTypeOptions()
    {
        return [
            'country' => e(trans('kp.express::lang.region.country')),
            'province' => e(trans('kp.express::lang.region.province')),
            'regency' => e(trans('kp.express::lang.region.regency')),
            'district' => e(trans('kp.express::lang.region.district')),
        ];
    }

    public function scopeParentFilter($query, $value)
    {
        $query->whereHas('parent', function ($query) use ($value) {
            $query->where('name', 'like', "%$value");
        });
    }

    public function filterFields($fields, $context = null)
    {
        if ($context == 'update') {
            $fields->id->disabled = true;
        }
    }
}
