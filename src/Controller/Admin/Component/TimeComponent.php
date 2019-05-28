<?php
namespace App\Controller\Admin\Component;
use Cake\Controller\Admin\Component;
use Cake\Controller\ComponentRegistry;
use Cake\I18n\Time;

/**
 * Time component
 */
class TimeComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function now()
    {
        return new Time();
    }
}
