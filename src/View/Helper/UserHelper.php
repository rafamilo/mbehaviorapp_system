<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use ORM\TableRegistry;

/**
 * User helper
 */
class UserHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function thisUser()
    {
        TableRegistry::get('Users', $config);
    }
}
