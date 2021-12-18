<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Clinicians Controller
 *
 * @property \App\Model\Table\CliniciansTable $Clinicians
 * @method \App\Model\Entity\Clinician[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CliniciansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        $user = $this->request->getAttribute('identity');
        $query = $user->applyScope('index', $this->Clinicians->find('all'));
        $this->set('clinicians', $this->paginate($query));

        $patients = $this->loadModel('Patients')->find();
        $this->set('viewPatients', $patients);

        $data = $this->loadModel('Data')->find();
        $this->set('viewData', $data);


    }

    public function graphs()
    {

        $clinician = $this->Clinicians->newEmptyEntity();
        $this->Authorization->authorize($clinician);

    }

    /**
     * View method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->authorize($this->Clinicians);
        $this->set(compact('clinician'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clinician = $this->Clinicians->newEmptyEntity();
        $this->Authorization->authorize($clinician);

        if ($this->request->is('post')) {
            $clinician = $this->Clinicians->patchEntity($clinician, $this->request->getData());
            if ($this->Clinicians->save($clinician)) {
                $this->Flash->success(__('The clinician has been saved.'));

                return $this->redirect(['controller'=>'Admin','action'=>'index']);
            }
            $this->Flash->error(__('The clinician could not be saved. Please, try again.'));
        }
        $this->set(compact('clinician'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clinician = $this->Clinicians->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($clinician);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $clinician = $this->Clinicians->patchEntity($clinician, $this->request->getData());
            if ($this->Clinicians->save($clinician)) {
                $this->Flash->success(__('The clinician has been saved.'));

                return $this->redirect(['controller'=>'Admin','action'=>'index']);
            }
            $this->Flash->error(__('The clinician could not be saved. Please, try again.'));
        }
        $this->set(compact('clinician'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clinician id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clinician = $this->Clinicians->get($id);
        $this->Authorization->authorize($clinician);

        if ($this->Clinicians->delete($clinician)) {
            $this->Flash->success(__('The clinician has been deleted.'));
        } else {
            $this->Flash->error(__('The clinician could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
