<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionnaires Controller
 *
 * @property \App\Model\Table\QuestionnairesTable $Questionnaires
 *
 * @method \App\Model\Entity\Questionnaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionnairesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $questionnaires = $this->paginate($this->Questionnaires);

        $this->set(compact('questionnaires'));
    }

    /**
     * View method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionnaire = $this->Questionnaires->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('questionnaire', $questionnaire);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionnaire = $this->Questionnaires->newEntity();
        if ($this->request->is('post')) {
            $questionnaire = $this->Questionnaires->patchEntity($questionnaire, $this->request->getData());
            if ($this->Questionnaires->save($questionnaire)) {
                $this->Flash->success(__('The questionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionnaire could not be saved. Please, try again.'));
        }
        $users = $this->Questionnaires->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionnaire', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionnaire = $this->Questionnaires->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionnaire = $this->Questionnaires->patchEntity($questionnaire, $this->request->getData());
            if ($this->Questionnaires->save($questionnaire)) {
                $this->Flash->success(__('The questionnaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionnaire could not be saved. Please, try again.'));
        }
        $users = $this->Questionnaires->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionnaire', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionnaire id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionnaire = $this->Questionnaires->get($id);
        if ($this->Questionnaires->delete($questionnaire)) {
            $this->Flash->success(__('The questionnaire has been deleted.'));
        } else {
            $this->Flash->error(__('The questionnaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function questionnairefill (){
         $this->paginate = [
            'contain' => ['Users']
        ];
        $questionnaires = $this->paginate($this->Questionnaires);

        $this->set(compact('questionnaires'));
    }

    
    public function isAuthorized($user){
        if (isset($user['role']) && ($user['role'] === 'admin')) {  // Dla użytkownika o roli admin
            $allowedActions = ['edit','add','delete','view', 'index', 'logout','questionnairefill']; // Pozwól na dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'user')) { // Dla użytkownika o roli user
            $allowedActions = ['questionnairefill','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'kursant')) { // Dla użytkownika o roli user
            $allowedActions = ['questionnairefill','logout','view'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'teacher')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'prowadzacy')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view','add'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
   
        return false;
        return parent::isAuthorized($user);
    } 
}
