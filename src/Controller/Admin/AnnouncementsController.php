<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Announcements Controller
 *
 * @property \App\Model\Table\AnnouncementsTable $Announcements
 */
class AnnouncementsController extends AppController
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
        $announcements = $this->paginate($this->Announcements);

        $this->set(compact('announcements'));
        $this->set('_serialize', ['announcements']);
    }

    public function view($id = null)
    {
        $announcement = $this->Announcements->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('announcement');
        $this->set('_serialize', ['announcement']);
    }

    public function add()
    {
        $announcement = $this->Announcements->newEntity();
        if ($this->request->is('post')) {

            $announcement = $this->PatchTimeStamp->PatchTimeEntity($this->Announcements, $this->request->data, $announcement, false);
            
            if ($this->Announcements->save($announcement)) {
                $this->Flash->success(__('O announcement foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O announcement não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('announcement'));
        $this->set('_serialize', ['announcement']);
    }

    public function edit($id = null)
    {
        $announcement = $this->Announcements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $announcement = $this->PatchTimeStamp->PatchTimeEntity($this->Announcements, $this->request->data, $announcement, false);
                        
            if ($this->Announcements->save($announcement)) {
                $this->Flash->success(__('O announcement foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O announcement não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('announcement'));
        $this->set('_serialize', ['announcement']);
    }

    public function delete($id = null)
    {
        $announcement = $this->Announcements->get($id);
                
        $announcement = $this->PatchTimeStamp->PatchTimeEntity($this->Announcements, $this->request->data, $announcement, true);

        if ($this->Announcements->save($announcement)) {
            $this->Flash->success(__('O announcement foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O announcement não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
