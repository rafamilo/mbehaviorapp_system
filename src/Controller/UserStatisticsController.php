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

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userStatistics = $this->paginate($this->UserStatistics);

        $this->set(compact('userStatistics'));
        $this->set('_serialize', ['userStatistics']);
    }

    public function view($id = null)
    {
        $userStatistic = $this->UserStatistics->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userStatistic');
        $this->set('_serialize', ['userStatistic']);
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

    public function edit($id = null)
    {
        $userStatistic = $this->UserStatistics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $userStatistic = $this->PatchTimeStamp->PatchTimeEntity($this->UserStatistics, $this->request->data, $userStatistic, false);
                        
            if ($this->UserStatistics->save($userStatistic)) {
                $this->Flash->success(__('O user statistic foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user statistic não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userStatistic'));
        $this->set('_serialize', ['userStatistic']);
    }

    public function delete($id = null)
    {
        $userStatistic = $this->UserStatistics->get($id);
                
        $userStatistic = $this->PatchTimeStamp->PatchTimeEntity($this->UserStatistics, $this->request->data, $userStatistic, true);

        if ($this->UserStatistics->save($userStatistic)) {
            $this->Flash->success(__('O user statistic foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user statistic não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
