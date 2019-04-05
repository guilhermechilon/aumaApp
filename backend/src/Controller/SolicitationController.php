<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitation Controller
 *
 * @property \App\Model\Table\SolicitationTable $Solicitation
 *
 * @method \App\Model\Entity\Solicitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Statuses', 'Forklifts', 'Bags']
        ];
        $solicitation = $this->paginate($this->Solicitation);

        $this->set(compact('solicitation'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitation = $this->Solicitation->get($id, [
            'contain' => ['Statuses', 'Forklifts', 'Bags']
        ]);

        $this->set('solicitation', $solicitation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitation = $this->Solicitation->newEntity();
        if ($this->request->is('post')) {
            $solicitation = $this->Solicitation->patchEntity($solicitation, $this->request->getData());
            if ($this->Solicitation->save($solicitation)) {
                $this->Flash->success(__('The solicitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitation could not be saved. Please, try again.'));
        }
        $statuses = $this->Solicitation->Statuses->find('list', ['limit' => 200]);
        $forklifts = $this->Solicitation->Forklifts->find('list', ['limit' => 200]);
        $bags = $this->Solicitation->Bags->find('list', ['limit' => 200]);
        $this->set(compact('solicitation', 'statuses', 'forklifts', 'bags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitation = $this->Solicitation->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitation = $this->Solicitation->patchEntity($solicitation, $this->request->getData());
            if ($this->Solicitation->save($solicitation)) {
                $this->Flash->success(__('The solicitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitation could not be saved. Please, try again.'));
        }
        $statuses = $this->Solicitation->Statuses->find('list', ['limit' => 200]);
        $forklifts = $this->Solicitation->Forklifts->find('list', ['limit' => 200]);
        $bags = $this->Solicitation->Bags->find('list', ['limit' => 200]);
        $this->set(compact('solicitation', 'statuses', 'forklifts', 'bags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitation = $this->Solicitation->get($id);
        if ($this->Solicitation->delete($solicitation)) {
            $this->Flash->success(__('The solicitation has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
