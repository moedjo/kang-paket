<?php

namespace KP\Express\Models;

use Model;

/**
 * Model
 */
class DomesticOrder extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kp_express_domestic_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $morphOne = [
        'order' => ['KP\Express\Models\Order', 'name' => 'orderable']
    ];


    public $belongsTo = [
        'created_user' => [
            'Backend\Models\User',
            'key' => 'created_user_id'
        ],
    ];

    protected function beforeCreate()
    {


        // $order = new Order();
        // $order->receipt_number = '001';
        // $order->orderable = $this;
        // $order->save();

        // $this->order = $order;

    }
}
