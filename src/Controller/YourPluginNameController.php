<?php
declare(strict_types=1);

namespace YourPluginName\Controller;

use App\Controller\AppController as BaseController;

class YourPluginNameController extends BaseController
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('YourPluginName.YourPluginName');
    }
}
