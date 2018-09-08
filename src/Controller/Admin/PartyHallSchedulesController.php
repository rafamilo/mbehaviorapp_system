<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * PartyHallSchedules Controller
 *
 * @property \App\Model\Table\PartyHallSchedulesTable $PartyHallSchedules
 */
class PartyHallSchedulesController extends AppController
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
        $partyHallSchedules = $this->paginate($this->PartyHallSchedules);

        $this->set(compact('partyHallSchedules'));
        $this->set('_serialize', ['partyHallSchedules']);
    }

    public function view($id = null)
    {
        $partyHallSchedule = $this->PartyHallSchedules->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('partyHallSchedule', $partyHallSchedule);
        $this->set('_serialize', ['partyHallSchedule']);
    }

    public function add()
    {
        $partyHallSchedule = $this->PartyHallSchedules->newEntity();
        if ($this->request->is('post')) {

            $partyHallSchedule = $this->PatchTimeStamp->PatchTimeEntity($this->PartyHallSchedules, $this->request->data, $partyHallSchedule, false);
            
            if ($this->PartyHallSchedules->save($partyHallSchedule)) {
                $this->Flash->success(__('O party hall schedule foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O party hall schedule não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('partyHallSchedule'));
        $this->set('_serialize', ['partyHallSchedule']);
    }

    public function edit($id = null)
    {
        $partyHallSchedule = $this->PartyHallSchedules->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $partyHallSchedule = $this->PatchTimeStamp->PatchTimeEntity($this->PartyHallSchedules, $this->request->data, $partyHallSchedule, false);
                        
            if ($this->PartyHallSchedules->save($partyHallSchedule)) {
                $this->Flash->success(__('O party hall schedule foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O party hall schedule não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('partyHallSchedule'));
        $this->set('_serialize', ['partyHallSchedule']);
    }

    public function delete($id = null)
    {
        $partyHallSchedule = $this->PartyHallSchedules->get($id);
                
        $partyHallSchedule = $this->PatchTimeStamp->PatchTimeEntity($this->PartyHallSchedules, $this->request->data, $partyHallSchedule, true);

        if ($this->PartyHallSchedules->save($partyHallSchedule)) {
            $this->Flash->success(__('O party hall schedule foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O party hall schedule não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
