<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avenue Controller
 *
 * @property \App\Model\Table\AvenueTable $Avenue
 *
 * @method \App\Model\Entity\Avenue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvenueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $avenue = $this->paginate($this->Avenue);

        $this->set(compact('avenue'));
    }

    /**
     * View method
     *
     * @param string|null $id Avenue id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avenue = $this->Avenue->get($id, [
            'contain' => ['Location']
        ]);

        $this->set('avenue', $avenue);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avenue = $this->Avenue->newEntity();
        if ($this->request->is('post')) {
            $avenue = $this->Avenue->patchEntity($avenue, $this->request->getData());
            if ($this->Avenue->save($avenue)) {
                $this->Flash->success(__('The avenue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avenue could not be saved. Please, try again.'));
        }
        $this->set(compact('avenue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avenue id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avenue = $this->Avenue->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avenue = $this->Avenue->patchEntity($avenue, $this->request->getData());
            if ($this->Avenue->save($avenue)) {
                $this->Flash->success(__('The avenue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avenue could not be saved. Please, try again.'));
        }
        $this->set(compact('avenue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avenue id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avenue = $this->Avenue->get($id);
        if ($this->Avenue->delete($avenue)) {
            $this->Flash->success(__('The avenue has been deleted.'));
        } else {
            $this->Flash->error(__('The avenue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
