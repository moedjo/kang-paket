<?php

namespace KP\Express\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Vendors extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $bodyClass = 'compact-container';

    public $requiredPermissions = [
        'kp_express_vendors'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('KP.Express', 'master-data', 'vendors');
    }
}
