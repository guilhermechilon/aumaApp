<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typecoffe Controller
 *
 * @property \App\Model\Table\TypecoffeTable $Typecoffe
 *
 * @method \App\Model\Entity\Typecoffe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypecoffeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typecoffe = $this->paginate($this->Typecoffe);

        $this->set(compact('typecoffe'));
    }

    /**
     * View method
     *
     * @param string|null $id Typecoffe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typecoffe = $this->Typecoffe->get($id, [
            'contain' => []
        ]);

        $this->set('typecoffe', $typecoffe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typecoffe = $this->Typecoffe->newEntity();
        if ($this->request->is('post')) {
            $typecoffe = $this->Typecoffe->patchEntity($typecoffe, $this->request->getData());
            if ($this->Typecoffe->save($typecoffe)) {
                $this->Flash->success(__('The typecoffe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecoffe could not be saved. Please, try again.'));
        }
        $this->set(compact('typecoffe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typecoffe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typecoffe = $this->Typecoffe->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typecoffe = $this->Typecoffe->patchEntity($typecoffe, $this->request->getData());
            if ($this->Typecoffe->save($typecoffe)) {
                $this->Flash->success(__('The typecoffe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typecoffe could not be saved. Please, try again.'));
        }
        $this->set(compact('typecoffe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typecoffe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typecoffe = $this->Typecoffe->get($id);
        if ($this->Typecoffe->delete($typecoffe)) {
            $this->Flash->success(__('The typecoffe has been deleted.'));
        } else {
            $this->Flash->error(__('The typecoffe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
