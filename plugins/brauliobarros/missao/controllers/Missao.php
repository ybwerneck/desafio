<?php namespace BraulioBarros\Missao\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Missao extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BraulioBarros.Missao', 'main-menu-item');
    }
}
