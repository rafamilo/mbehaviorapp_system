<?php
namespace App\Controller\Admin\Component;
use Cake\Controller\Admin\Component;
use Cake\I18n\Time;

class PatchTimeStampComponent extends Component
{
    public function PatchTimeEntity($model, $newEntity, $entity, $delete)
    {
        //TODO create Session or Auth!

        if($entity->isNew()){
            $newEntity['created_by'] = $this->request->session() && $this->request->session()->read('Auth.User.id') ? $this->request->session()->read('Auth.User.id') : -13;
            $newEntity['created_at'] = new Time();
            $newEntity['updated_by'] = $this->request->session() && $this->request->session()->read('Auth.User.id') ? $this->request->session()->read('Auth.User.id') : -13;
            $newEntity['updated_at'] = new Time();
            $newEntity['created'] = new Time();
            $newEntity['updated'] = new Time();

            $newEntity['status'] = 1;
        } else {
            $newEntity['updated_by'] = $this->request->session() && $this->request->session()->read('Auth.User.id') ? $this->request->session()->read('Auth.User.id') : -13;
            $newEntity['updated_at'] = new Time();
            $newEntity['updated'] = new Time();
        }

        if ($delete)
            $newEntity['status'] = 0;

        $entity = $model->patchEntity($entity, $newEntity);

        return $entity;
    }
}
