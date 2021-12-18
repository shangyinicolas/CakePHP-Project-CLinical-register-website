<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Assigned Controller
 *
 * @property \App\Model\Table\AssignedTable $Assigned
 * @method \App\Model\Entity\Assigned[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssignedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->authorize($this->Assigned);

        $this->paginate = [
            'contain' => ['Clinicians', 'Patients'],
        ];
        $assigned = $this->paginate($this->Assigned);

        $this->set(compact('assigned'));

    }

    /**
     * View method
     *
     * @param string|null $id Assigned id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assigned = $this->Assigned->get($id, [
            'contain' => ['Clinicians', 'Patients'],
        ]);
        $this->Authorization->authorize($assigned);

        $this->set(compact('assigned'));

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assigned = $this->Assigned->newEmptyEntity();
        $this->Authorization->authorize($assigned);

        if ($this->request->is('post')) {
            $assigned = $this->Assigned->patchEntity($assigned, $this->request->getData());
            if ($this->Assigned->save($assigned)) {
                $this->Flash->success(__('The assigned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assigned could not be saved. Please, try again.'));
        }
        $clinicians = $this->Assigned->Clinicians->find('list', ['limit' => 200]);
        $patients = $this->Assigned->Patients->find('list', ['limit' => 200]);
        $this->set(compact('assigned', 'clinicians', 'patients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assigned id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assigned = $this->Assigned->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($assigned);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $assigned = $this->Assigned->patchEntity($assigned, $this->request->getData());
            if ($this->Assigned->save($assigned)) {
                $this->Flash->success(__('The assigned has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assigned could not be saved. Please, try again.'));
        }
        $clinicians = $this->Assigned->Clinicians->find('list', ['limit' => 200]);
        $patients = $this->Assigned->Patients->find('list', ['limit' => 200]);
        $this->set(compact('assigned', 'clinicians', 'patients'));
    }

    /**.
     * Delete method
     *
     * @param string|null $id Assigned id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assigned = $this->Assigned->get($id);
        $this->Authorization->authorize($assigned);

        if ($this->Assigned->delete($assigned)) {
            $this->Flash->success(__('The assigned has been deleted.'));
        } else {
            $this->Flash->error(__('The assigned could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
