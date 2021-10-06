<?php namespace KP\Express;

use KP\Express\Models\DomesticOrder;
use October\Rain\Database\Relations\Relation;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot(){
        Relation::morphMap([
            'domestic_order' => DomesticOrder::class
        ]);
    }
}
