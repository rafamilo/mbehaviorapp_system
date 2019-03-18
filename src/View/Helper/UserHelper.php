<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;

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
        $user_id = $_SESSION['Auth']['User']['id'];
        return TableRegistry::get('Users')->get($user_id);
    }

    public function userName()
    {
        return $this->thisUser()->name;
    }

    public function condominiumName()
    {
        return TableRegistry::get('Condominiums')->get($this->thisUser()->condominium_id)->name;
    }
}
