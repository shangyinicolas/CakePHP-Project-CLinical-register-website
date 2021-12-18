<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Notifications Controller
 *
 * @property \App\Model\Table\NotificationsTable $Notifications
 * @method \App\Model\Entity\Notification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotificationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clinicians', 'Patients'],
        ];
       $id =  $this->Authentication->getIdentity()->get('id');
       $query = $this->Notifications->find()->order(['Notifications.id'=>'DESC']);//->where(['Notifications.clinician_id'=>$id]);
        $notifications = $this->paginate($query);
        $this->Authorization->authorize($this->Notifications->newEmptyEntity());
        $this->set(compact('notifications'));
    }

    public function patientsIndex()
    {
        $this->paginate = [
            'contain' => ['Clinicians', 'Patients'],
        ];
        $id =  $this->Authentication->getIdentity()->get('id');
        $query = $this->Notifications->find()->order(['Notifications.id'=>'DESC']);//->where(['Notifications.clinician_id'=>$id]);
        $notifications = $this->paginate($query);
        $this->Authorization->authorize($this->Notifications->newEmptyEntity());
        $this->set(compact('notifications'));
    }


    /**
     * View method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notification = $this->Notifications->get($id, [
            'contain' => ['Clinicians', 'Patients'],
        ]);
        $this->Authorization->authorize($notification);
        $this->set(compact('notification'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notification = $this->Notifications->newEmptyEntity();
        $this->Authorization->authorize($notification);
        if ($this->request->is('post')) {
            $notification = $this->Notifications->patchEntity($notification, $this->request->getData());
            $notification->send_time =  date("Y-m-d H:i:s");
            //$notification->clinician_id = $this->Authentication->getIdentity()->get('id');
            //print_r($notification);exit;
            if ($this->Notifications->save($notification)) {
                $this->Flash->success(__('The notification has been saved.'));

                return $this->redirect(['controller'=>'Clinicians','action'=>'index']);
            }
            $this->Flash->error(__('The notification could not be saved. Please, try again.'));
        }
        $clinicians = $this->Notifications->Clinicians->find('list', ['limit' => 200]);
        $patients = $this->Notifications->Patients->find('list', ['limit' => 200]);
        $this->set(compact('notification', 'clinicians', 'patients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notification = $this->Notifications->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($notification);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notification = $this->Notifications->patchEntity($notification, $this->request->getData());
            if ($this->Notifications->save($notification)) {
                $this->Flash->success(__('The notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notification could not be saved. Please, try again.'));
        }
        $clinicians = $this->Notifications->Clinicians->find('list', ['limit' => 200]);
        $patients = $this->Notifications->Patients->find('list', ['limit' => 200]);
        $this->set(compact('notification', 'clinicians', 'patients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notification id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notification = $this->Notifications->get($id);
        $this->Authorization->authorize($notification);
        if ($this->Notifications->delete($notification)) {
            $this->Flash->success(__('The notification has been deleted.'));
        } else {
            $this->Flash->error(__('The notification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
