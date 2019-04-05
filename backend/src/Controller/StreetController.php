<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Street Controller
 *
 * @property \App\Model\Table\StreetTable $Street
 *
 * @method \App\Model\Entity\Street[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StreetController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $street = $this->paginate($this->Street);

        $this->set(compact('street'));
    }

    /**
     * View method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $street = $this->Street->get($id, [
            'contain' => ['Location']
        ]);

        $this->set('street', $street);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $street = $this->Street->newEntity();
        if ($this->request->is('post')) {
            $street = $this->Street->patchEntity($street, $this->request->getData());
            if ($this->Street->save($street)) {
                $this->Flash->success(__('The street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The street could not be saved. Please, try again.'));
        }
        $this->set(compact('street'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $street = $this->Street->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $street = $this->Street->patchEntity($street, $this->request->getData());
            if ($this->Street->save($street)) {
                $this->Flash->success(__('The street has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The street could not be saved. Please, try again.'));
        }
        $this->set(compact('street'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Street id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $street = $this->Street->get($id);
        if ($this->Street->delete($street)) {
            $this->Flash->success(__('The street has been deleted.'));
        } else {
            $this->Flash->error(__('The street could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
