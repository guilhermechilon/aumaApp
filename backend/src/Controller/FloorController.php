<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Floor Controller
 *
 * @property \App\Model\Table\FloorTable $Floor
 *
 * @method \App\Model\Entity\Floor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FloorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $floor = $this->paginate($this->Floor);

        $this->set(compact('floor'));
    }

    /**
     * View method
     *
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $floor = $this->Floor->get($id, [
            'contain' => ['Location']
        ]);

        $this->set('floor', $floor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $floor = $this->Floor->newEntity();
        if ($this->request->is('post')) {
            $floor = $this->Floor->patchEntity($floor, $this->request->getData());
            if ($this->Floor->save($floor)) {
                $this->Flash->success(__('The floor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The floor could not be saved. Please, try again.'));
        }
        $this->set(compact('floor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $floor = $this->Floor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $floor = $this->Floor->patchEntity($floor, $this->request->getData());
            if ($this->Floor->save($floor)) {
                $this->Flash->success(__('The floor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The floor could not be saved. Please, try again.'));
        }
        $this->set(compact('floor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $floor = $this->Floor->get($id);
        if ($this->Floor->delete($floor)) {
            $this->Flash->success(__('The floor has been deleted.'));
        } else {
            $this->Flash->error(__('The floor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
