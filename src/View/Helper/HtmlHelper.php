<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Html helper
 */
class HtmlHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function icon($class)
    {
        return '<i class="fa fa-{{class}}"></i>';
    }
}
