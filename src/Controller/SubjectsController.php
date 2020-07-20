<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subjects Controller
 *
 * @property \App\Model\Table\SubjectsTable $Subjects
 *
 * @method \App\Model\Entity\Subject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubjectsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $subjects = $this->paginate($this->Subjects);

        $this->set(compact('subjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subject = $this->Subjects->get($id, [
            'contain' => ['Courses']
        ]);

        $this->set('subject', $subject);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subject = $this->Subjects->newEntity();
        if ($this->request->is('post')) {
            $subject = $this->Subjects->patchEntity($subject, $this->request->getData());
            if ($this->Subjects->save($subject)) {
                $this->Flash->success(__('The subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subject could not be saved. Please, try again.'));
        }
        $courses = $this->Subjects->Courses->find('list', ['limit' => 200]);
        $this->set(compact('subject', 'courses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subject = $this->Subjects->get($id, [
            'contain' => ['Courses']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subject = $this->Subjects->patchEntity($subject, $this->request->getData());
            if ($this->Subjects->save($subject)) {
                $this->Flash->success(__('The subject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subject could not be saved. Please, try again.'));
        }
        $courses = $this->Subjects->Courses->find('list', ['limit' => 200]);
        $this->set(compact('subject', 'courses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subject = $this->Subjects->get($id);
        if ($this->Subjects->delete($subject)) {
            $this->Flash->success(__('The subject has been deleted.'));
        } else {
            $this->Flash->error(__('The subject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user){
            if (isset($user['role']) && ($user['role'] === 'admin')) {  // Dla użytkownika o roli admin
                $allowedActions = ['edit','add','delete','view', 'index', 'logout']; // Pozwól na dostęp do tych akcji w tym kontrolerze
            if(in_array($this->request->action, $allowedActions)) {
                return true; }
            }
            if (isset($user['role']) && ($user['role'] === 'user')) { // Dla użytkownika o roli user
                $allowedActions = ['index','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
            if(in_array($this->request->action, $allowedActions)) {
                return true; }
            }
            if (isset($user['role']) && ($user['role'] === 'kursant')) { // Dla użytkownika o roli user
                $allowedActions = ['index','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
            if(in_array($this->request->action, $allowedActions)) {
                return true; }
            }
            if (isset($user['role']) && ($user['role'] === 'teacher')) { // Dla użytkownika o roli teacher
                $allowedActions = ['index','logout','view','edit','delete','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
            if(in_array($this->request->action, $allowedActions)) {
                return true; }
            }
            if (isset($user['role']) && ($user['role'] === 'prowadzacy')) { // Dla użytkownika o roli teacher
                $allowedActions = ['index','logout','view','edit','delete','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
            if(in_array($this->request->action, $allowedActions)) {
                return true; }
            }
            return false;
            return parent::isAuthorized($user);
        }


}
