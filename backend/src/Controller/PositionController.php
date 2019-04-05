<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Position Controller
 *
 * @property \App\Model\Table\PositionTable $Position
 *
 * @method \App\Model\Entity\Position[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PositionController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $position = $this->paginate($this->Position);

        $this->set(compact('position'));
    }

    /**
     * View method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $position = $this->Position->get($id, [
            'contain' => ['Location']
        ]);

        $this->set('position', $position);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $position = $this->Position->newEntity();
        if ($this->request->is('post')) {
            $position = $this->Position->patchEntity($position, $this->request->getData());
            if ($this->Position->save($position)) {
                $this->Flash->success(__('The position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The position could not be saved. Please, try again.'));
        }
        $this->set(compact('position'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $position = $this->Position->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $position = $this->Position->patchEntity($position, $this->request->getData());
            if ($this->Position->save($position)) {
                $this->Flash->success(__('The position has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The position could not be saved. Please, try again.'));
        }
        $this->set(compact('position'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Position id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $position = $this->Position->get($id);
        if ($this->Position->delete($position)) {
            $this->Flash->success(__('The position has been deleted.'));
        } else {
            $this->Flash->error(__('The position could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
