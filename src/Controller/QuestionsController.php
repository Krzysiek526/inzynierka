<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $questions = $this->paginate($this->Questions);

        $this->set(compact('questions'));
    }

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Tests', 'Answers', 'UserAnswers']
        ]);

        $this->set('question', $question);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $tests = $this->Questions->Tests->find('list', ['limit' => 200]);
        $this->set(compact('question', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Tests']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $tests = $this->Questions->Tests->find('list', ['limit' => 200]);
        $this->set(compact('question', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('The question has been deleted.'));
        } else {
            $this->Flash->error(__('The question could not be deleted. Please, try again.'));
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
