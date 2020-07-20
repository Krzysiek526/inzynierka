<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserAnswers Controller
 *
 * @property \App\Model\Table\UserAnswersTable $UserAnswers
 *
 * @method \App\Model\Entity\UserAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserAnswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tests', 'Questions', 'Users']
        ];
        $userAnswers = $this->paginate($this->UserAnswers);

        $this->set(compact('userAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id User Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAnswer = $this->UserAnswers->get($id, [
            'contain' => ['Tests', 'Questions', 'Users']
        ]);

        $this->set('userAnswer', $userAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAnswer = $this->UserAnswers->newEntity();
        if ($this->request->is('post')) {
            $userAnswer = $this->UserAnswers->patchEntity($userAnswer, $this->request->getData());
            if ($this->UserAnswers->save($userAnswer)) {
                $this->Flash->success(__('The user answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user answer could not be saved. Please, try again.'));
        }
        $tests = $this->UserAnswers->Tests->find('list', ['limit' => 200]);
        $questions = $this->UserAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->UserAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAnswer', 'tests', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAnswer = $this->UserAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAnswer = $this->UserAnswers->patchEntity($userAnswer, $this->request->getData());
            if ($this->UserAnswers->save($userAnswer)) {
                $this->Flash->success(__('The user answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user answer could not be saved. Please, try again.'));
        }
        $tests = $this->UserAnswers->Tests->find('list', ['limit' => 200]);
        $questions = $this->UserAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->UserAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAnswer', 'tests', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAnswer = $this->UserAnswers->get($id);
        if ($this->UserAnswers->delete($userAnswer)) {
            $this->Flash->success(__('The user answer has been deleted.'));
        } else {
            $this->Flash->error(__('The user answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function isAuthorized($user){
        if (isset($user['role']) && ($user['role'] === 'admin')) {  // Dla użytkownika o roli admin
            $allowedActions = ['edit','add','delete','view', 'index', 'logout','start','startadmin','startteacher','startuser']; // Pozwól na dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'user')) { // Dla użytkownika o roli user
            $allowedActions = ['index','logout','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'kursant')) { // Dla użytkownika o roli user
            $allowedActions = ['index','logout','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'teacher')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'prowadzacy')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
   
        return false;
        return parent::isAuthorized($user);
    } 
}
