<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typeuser Controller
 *
 * @property \App\Model\Table\TypeuserTable $Typeuser
 *
 * @method \App\Model\Entity\Typeuser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeuserController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeuser = $this->paginate($this->Typeuser);

        $this->set(compact('typeuser'));
    }

    /**
     * View method
     *
     * @param string|null $id Typeuser id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeuser = $this->Typeuser->get($id, [
            'contain' => []
        ]);

        $this->set('typeuser', $typeuser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeuser = $this->Typeuser->newEntity();
        if ($this->request->is('post')) {
            $typeuser = $this->Typeuser->patchEntity($typeuser, $this->request->getData());
            if ($this->Typeuser->save($typeuser)) {
                $this->Flash->success(__('The typeuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeuser could not be saved. Please, try again.'));
        }
        $this->set(compact('typeuser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeuser id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeuser = $this->Typeuser->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeuser = $this->Typeuser->patchEntity($typeuser, $this->request->getData());
            if ($this->Typeuser->save($typeuser)) {
                $this->Flash->success(__('The typeuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeuser could not be saved. Please, try again.'));
        }
        $this->set(compact('typeuser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeuser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeuser = $this->Typeuser->get($id);
        if ($this->Typeuser->delete($typeuser)) {
            $this->Flash->success(__('The typeuser has been deleted.'));
        } else {
            $this->Flash->error(__('The typeuser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
