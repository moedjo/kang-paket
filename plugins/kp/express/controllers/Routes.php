<?php namespace KP\Express\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Routes extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'kp_express_routes' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('KP.Express', 'main-menu-item2');
    }
}
