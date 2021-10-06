<?php

namespace KP\Express\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use KP\Express\Models\Order;

class DomesticOrders extends Controller
{
    public $implement = ['Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'kp_express_access_domestic_orders'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('KP.Express', 'main-menu-item2');
    }


    public function formExtendModel($model)
    {

        if ($model->order == null) {
            $model->order = new Order();
        }
        $model->order->user_id = $this->user->id;
    }
}
