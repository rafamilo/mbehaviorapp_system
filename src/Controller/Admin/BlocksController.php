<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Blocks Controller
 *
 * @property \App\Model\Table\BlocksTable $Blocks
 */
class BlocksController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $blocks = $this->paginate($this->Blocks);

        $this->set(compact('blocks'));
        $this->set('_serialize', ['blocks']);
    }

    public function view($id = null)
    {
        $block = $this->Blocks->get($id, [
            'contain' => ['BlockInvoices']
        ]);

        $this->set('block', $block);
        $this->set('_serialize', ['block']);
    }

    public function add()
    {
        $block = $this->Blocks->newEntity();
        if ($this->request->is('post')) {

            $block = $this->PatchTimeStamp->PatchTimeEntity($this->Blocks, $this->request->data, $block, false);
            
            if ($this->Blocks->save($block)) {
                $this->Flash->success(__('O block foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O block não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('block'));
        $this->set('_serialize', ['block']);
    }

    public function edit($id = null)
    {
        $block = $this->Blocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $block = $this->PatchTimeStamp->PatchTimeEntity($this->Blocks, $this->request->data, $block, false);
                        
            if ($this->Blocks->save($block)) {
                $this->Flash->success(__('O block foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O block não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('block'));
        $this->set('_serialize', ['block']);
    }

    public function delete($id = null)
    {
        $block = $this->Blocks->get($id);
                
        $block = $this->PatchTimeStamp->PatchTimeEntity($this->Blocks, $this->request->data, $block, true);

        if ($this->Blocks->save($block)) {
            $this->Flash->success(__('O block foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O block não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
