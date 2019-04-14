<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserStatistics Controller
 *
 * @property \App\Model\Table\UserStatisticsTable $UserStatistics
 */
class UserStatisticsController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function add()
    {
        $userStatistic = $this->UserStatistics->newEntity();
        if ($this->request->is('post')) {

            $userStatistic = $this->PatchTimeStamp->PatchTimeEntity($this->UserStatistics, $this->request->data, $userStatistic, false);
            
            if ($this->UserStatistics->save($userStatistic)) {
                $this->Flash->success(__('O user statistic foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user statistic não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userStatistic'));
        $this->set('_serialize', ['userStatistic']);
    }
}
