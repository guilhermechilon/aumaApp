<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bag Controller
 *
 * @property \App\Model\Table\BagTable $Bag
 *
 * @method \App\Model\Entity\Bag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BagController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locations', 'Users']
        ];
        $bag = $this->paginate($this->Bag);

        $this->set(compact('bag'));
    }

    /**
     * View method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bag = $this->Bag->get($id, [
            'contain' => ['Locations', 'Users', 'Bagtypecoffe', 'Solicitation']
        ]);

        $this->set('bag', $bag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bag = $this->Bag->newEntity();
        if ($this->request->is('post')) {
            $bag = $this->Bag->patchEntity($bag, $this->request->getData());
            if ($this->Bag->save($bag)) {
                $this->Flash->success(__('The bag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bag could not be saved. Please, try again.'));
        }
        $locations = $this->Bag->Locations->find('list', ['limit' => 200]);
        $users = $this->Bag->Users->find('list', ['limit' => 200]);
        $this->set(compact('bag', 'locations', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bag = $this->Bag->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bag = $this->Bag->patchEntity($bag, $this->request->getData());
            if ($this->Bag->save($bag)) {
                $this->Flash->success(__('The bag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bag could not be saved. Please, try again.'));
        }
        $locations = $this->Bag->Locations->find('list', ['limit' => 200]);
        $users = $this->Bag->Users->find('list', ['limit' => 200]);
        $this->set(compact('bag', 'locations', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bag = $this->Bag->get($id);
        if ($this->Bag->delete($bag)) {
            $this->Flash->success(__('The bag has been deleted.'));
        } else {
            $this->Flash->error(__('The bag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
