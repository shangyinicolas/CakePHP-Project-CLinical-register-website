<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enquiries Controller
 *
 * @property \App\Model\Table\EnquiriesTable $Enquiries
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnquiriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function mark($id = null) {
        $this->Authorization->skipAuthorization();

        // $this->set('enquiries',$this->paginate());
        // $enquiries =  $this->paginate($this->Enquiries);
        // $this->set(compact('enquiry'));
        $enquiry = $this->Enquiries->get($id);
        if ($enquiry->email_sent) {
            $this->Flash->error(__('This enquiry is already marked as replied. '));
        } else {
            $enquiry->email_sent = true;
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been marked as replied.'));
            } else {
                $this->Flash->error(__('The enquiry could not be marked as sent. Please, try again.'));
            }
        }

        return $this->redirect(['action' => 'index']);
        $this->set(compact('enquiry'));
    }

    public function index()
    {
        // $user = $this->request->getAttribute('identity');
        // $query = $user->applyScope('index', $this->Enquiries->find('all'));
        // $this->set('enquiries',$this->paginate($query));
        $this->Authorization->skipAuthorization();

        $this->set('enquiries',$this->paginate());
        $enquiries =  $this->paginate($this->Enquiries);


    }

    /**
     * View method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enquiry = $this->Enquiries->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($enquiry);

        $this->set(compact('enquiry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $enquiry = $this->Enquiries->newEmptyEntity();
        $this->Authorization->authorize($enquiry);
        if ($this->request->is('post')) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
        }
        $this->set(compact('enquiry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $enquiry = $this->Enquiries->get($id, [
            'contain' => [],
        ]);

        $this->Authorization->authorize($enquiry);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enquiry = $this->Enquiries->patchEntity($enquiry, $this->request->getData());
            if ($this->Enquiries->save($enquiry)) {
                $this->Flash->success(__('The enquiry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enquiry could not be saved. Please, try again.'));
        }
        $this->set(compact('enquiry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enquiry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        $this->request->allowMethod(['post', 'delete']);
        $enquiry = $this->Enquiries->get($id);

        $this->Authorization->authorize($enquiry);

        if ($this->Enquiries->delete($enquiry)) {
            $this->Flash->success(__('The enquiry has been deleted.'));
        } else {
            $this->Flash->error(__('The enquiry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
