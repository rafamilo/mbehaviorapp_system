<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class PatchTimeStampComponent extends Component
{
    public function patchTimeStamp($model, $entity, $newEntity)
    {
        //TODO create Session or Auth!
        if($entity->isNew()){
            $newEntity['created_by'] = /*$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] :*/ '1';
            $newEntity['created_at'] = new Time();
            $newEntity['updated_by'] = /*$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] :*/ '1';
            $newEntity['updated_at'] = new Time();
        } else {
            $newEntity['updated_by'] = /*$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] :*/ '1';
            $newEntity['updated_at'] = new Time();
        }

        $entity = $model->patchEntity($entity, $newEntity);

        return $entity;
    }
}
