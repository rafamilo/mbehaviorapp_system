<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\I18n\Time;

class PatchTimeStampComponent extends Component
{
    public function PatchTimeEntity($model, $newEntity, $entity, $delete)
    {
        //TODO create Session or Auth!
        if($entity->isNew()){
            $newEntity['created_by'] = /**$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] : */ -13;
            $newEntity['created_at'] = new Time();
            $newEntity['updated_by'] = /**$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] : */ -13;
            $newEntity['updated_at'] = new Time();
            $newEntity['status'] = 1;
        } else {
            $newEntity['updated_by'] = /**$_SESSION['Auth']['User'] ? $_SESSION['Auth']['User']['id'] : */ -13;
            $newEntity['updated_at'] = new Time();
        }

        if ($delete)
            $newEntity['status'] = 0;

        $entity = $model->patchEntity($entity, $newEntity);

        return $entity;
    }
}
