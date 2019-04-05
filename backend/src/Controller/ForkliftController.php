<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Forklift Controller
 *
 * @property \App\Model\Table\ForkliftTable $Forklift
 *
 * @method \App\Model\Entity\Forklift[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ForkliftController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $forklift = $this->paginate($this->Forklift);

        $this->set(compact('forklift'));
    }

    /**
     * View method
     *
     * @param string|null $id Forklift id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $forklift = $this->Forklift->get($id, [
            'contain' => ['Solicitation']
        ]);

        $this->set('forklift', $forklift);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $forklift = $this->Forklift->newEntity();
        if ($this->request->is('post')) {
            $forklift = $this->Forklift->patchEntity($forklift, $this->request->getData());
            if ($this->Forklift->save($forklift)) {
                $this->Flash->success(__('The forklift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forklift could not be saved. Please, try again.'));
        }
        $this->set(compact('forklift'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Forklift id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $forklift = $this->Forklift->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $forklift = $this->Forklift->patchEntity($forklift, $this->request->getData());
            if ($this->Forklift->save($forklift)) {
                $this->Flash->success(__('The forklift has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The forklift could not be saved. Please, try again.'));
        }
        $this->set(compact('forklift'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Forklift id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $forklift = $this->Forklift->get($id);
        if ($this->Forklift->delete($forklift)) {
            $this->Flash->success(__('The forklift has been deleted.'));
        } else {
            $this->Flash->error(__('The forklift could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
