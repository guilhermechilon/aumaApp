<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Location Controller
 *
 * @property \App\Model\Table\LocationTable $Location
 *
 * @method \App\Model\Entity\Location[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Streets', 'Avenues', 'Floors', 'Positions']
        ];
        $location = $this->paginate($this->Location);

        $this->set(compact('location'));
    }

    /**
     * View method
     *
     * @param string|null $id Location id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $location = $this->Location->get($id, [
            'contain' => ['Streets', 'Avenues', 'Floors', 'Positions', 'Bag']
        ]);

        $this->set('location', $location);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $location = $this->Location->newEntity();
        if ($this->request->is('post')) {
            $location = $this->Location->patchEntity($location, $this->request->getData());
            if ($this->Location->save($location)) {
                $this->Flash->success(__('The location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location could not be saved. Please, try again.'));
        }
        $streets = $this->Location->Streets->find('list', ['limit' => 200]);
        $avenues = $this->Location->Avenues->find('list', ['limit' => 200]);
        $floors = $this->Location->Floors->find('list', ['limit' => 200]);
        $positions = $this->Location->Positions->find('list', ['limit' => 200]);
        $this->set(compact('location', 'streets', 'avenues', 'floors', 'positions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Location id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $location = $this->Location->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $location = $this->Location->patchEntity($location, $this->request->getData());
            if ($this->Location->save($location)) {
                $this->Flash->success(__('The location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The location could not be saved. Please, try again.'));
        }
        $streets = $this->Location->Streets->find('list', ['limit' => 200]);
        $avenues = $this->Location->Avenues->find('list', ['limit' => 200]);
        $floors = $this->Location->Floors->find('list', ['limit' => 200]);
        $positions = $this->Location->Positions->find('list', ['limit' => 200]);
        $this->set(compact('location', 'streets', 'avenues', 'floors', 'positions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Location id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $location = $this->Location->get($id);
        if ($this->Location->delete($location)) {
            $this->Flash->success(__('The location has been deleted.'));
        } else {
            $this->Flash->error(__('The location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
