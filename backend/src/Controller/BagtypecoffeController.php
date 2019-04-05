<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bagtypecoffe Controller
 *
 * @property \App\Model\Table\BagtypecoffeTable $Bagtypecoffe
 *
 * @method \App\Model\Entity\Bagtypecoffe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BagtypecoffeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TypeCoffes', 'Bags']
        ];
        $bagtypecoffe = $this->paginate($this->Bagtypecoffe);

        $this->set(compact('bagtypecoffe'));
    }

    /**
     * View method
     *
     * @param string|null $id Bagtypecoffe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bagtypecoffe = $this->Bagtypecoffe->get($id, [
            'contain' => ['TypeCoffes', 'Bags']
        ]);

        $this->set('bagtypecoffe', $bagtypecoffe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bagtypecoffe = $this->Bagtypecoffe->newEntity();
        if ($this->request->is('post')) {
            $bagtypecoffe = $this->Bagtypecoffe->patchEntity($bagtypecoffe, $this->request->getData());
            if ($this->Bagtypecoffe->save($bagtypecoffe)) {
                $this->Flash->success(__('The bagtypecoffe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bagtypecoffe could not be saved. Please, try again.'));
        }
        $typeCoffes = $this->Bagtypecoffe->TypeCoffes->find('list', ['limit' => 200]);
        $bags = $this->Bagtypecoffe->Bags->find('list', ['limit' => 200]);
        $this->set(compact('bagtypecoffe', 'typeCoffes', 'bags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bagtypecoffe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bagtypecoffe = $this->Bagtypecoffe->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bagtypecoffe = $this->Bagtypecoffe->patchEntity($bagtypecoffe, $this->request->getData());
            if ($this->Bagtypecoffe->save($bagtypecoffe)) {
                $this->Flash->success(__('The bagtypecoffe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bagtypecoffe could not be saved. Please, try again.'));
        }
        $typeCoffes = $this->Bagtypecoffe->TypeCoffes->find('list', ['limit' => 200]);
        $bags = $this->Bagtypecoffe->Bags->find('list', ['limit' => 200]);
        $this->set(compact('bagtypecoffe', 'typeCoffes', 'bags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bagtypecoffe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bagtypecoffe = $this->Bagtypecoffe->get($id);
        if ($this->Bagtypecoffe->delete($bagtypecoffe)) {
            $this->Flash->success(__('The bagtypecoffe has been deleted.'));
        } else {
            $this->Flash->error(__('The bagtypecoffe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
