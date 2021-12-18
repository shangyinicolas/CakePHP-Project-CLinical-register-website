<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Archive Controller
 *
 * @property \App\Model\Table\ArchiveTable $Archive
 * @method \App\Model\Entity\Archive[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArchiveController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $archive = $this->paginate($this->Archive);

        $this->set(compact('archive'));



    }

    /**
     * View method
     *
     * @param string|null $id Archive id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $archive = $this->Archive->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('archive'));
        $this->Authorization->authorize($archive);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $archive = $this->Archive->newEmptyEntity();
        $this->Authorization->authorize($archive);
        if ($this->request->is('post')) {
            $archive = $this->Archive->patchEntity($archive, $this->request->getData());
            if ($this->Archive->save($archive)) {
                $this->Flash->success(__('The archive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The archive could not be saved. Please, try again.'));
        }
        $this->set(compact('archive'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Archive id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $archive = $this->Archive->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($archive);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $archive = $this->Archive->patchEntity($archive, $this->request->getData());
            if ($this->Archive->save($archive)) {
                $this->Flash->success(__('The archive has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The archive could not be saved. Please, try again.'));
        }
        $this->set(compact('archive'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Archive id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $archive = $this->Archive->get($id);
        $this->Authorization->authorize($archive);
        if ($this->Archive->delete($archive)) {
            $this->Flash->success(__('The archive has been deleted.'));
        } else {
            $this->Flash->error(__('The archive could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function patientview()
    {
        $this->Authorization->skipAuthorization();
        $archive = $this->paginate($this->Archive);

        $this->set(compact('archive'));
    }

    public function publicview()
    {
        $this->Authorization->skipAuthorization();
        $archive = $this->paginate($this->Archive);

        $this->set(compact('archive'));
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['publicview']);
    }
}
