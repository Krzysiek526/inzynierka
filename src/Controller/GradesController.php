<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grades Controller
 *
 * @property \App\Model\Table\GradesTable $Grades
 *
 * @method \App\Model\Entity\Grade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GradesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Courses', 'Subjects', 'Tests']
        ];
        $grades = $this->paginate($this->Grades);

        $this->set(compact('grades'));
    }

    /**
     * View method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grade = $this->Grades->get($id, [
            'contain' => ['Users', 'Courses', 'Subjects', 'Tests']
        ]);

        $this->set('grade', $grade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grade = $this->Grades->newEntity();
        if ($this->request->is('post')) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('The grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grade could not be saved. Please, try again.'));
        }
        $users = $this->Grades->Users->find('list', ['limit' => 200]);
        $courses = $this->Grades->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Grades->Subjects->find('list', ['limit' => 200]);
        $tests = $this->Grades->Tests->find('list', ['limit' => 200]);
        $this->set(compact('grade', 'users', 'courses', 'subjects', 'tests'));
    }

    public function addc(){
        $grade = $this->Grades->newEntity();
        if ($this->request->is('post')) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('The grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grade could not be saved. Please, try again.'));
        }
        $users = $this->Grades->Users->find('list', ['limit' => 200]);
        $courses = $this->Grades->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Grades->Subjects->find('list', ['limit' => 200]);
        $tests = $this->Grades->Tests->find('list', ['limit' => 200]);
        $this->set(compact('grade', 'users', 'courses', 'subjects', 'tests'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grade = $this->Grades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grade = $this->Grades->patchEntity($grade, $this->request->getData());
            if ($this->Grades->save($grade)) {
                $this->Flash->success(__('The grade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The grade could not be saved. Please, try again.'));
        }
        $users = $this->Grades->Users->find('list', ['limit' => 200]);
        $courses = $this->Grades->Courses->find('list', ['limit' => 200]);
        $subjects = $this->Grades->Subjects->find('list', ['limit' => 200]);
        $tests = $this->Grades->Tests->find('list', ['limit' => 200]);
        $this->set(compact('grade', 'users', 'courses', 'subjects', 'tests'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Grade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grade = $this->Grades->get($id);
        if ($this->Grades->delete($grade)) {
            $this->Flash->success(__('The grade has been deleted.'));
        } else {
            $this->Flash->error(__('The grade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function presence(){
        $this->paginate = [
            'contain' => ['Users', 'Courses', 'Subjects', 'Tests']
        ];
        $grades = $this->paginate($this->Grades);

        $this->set(compact('grades'));
    }


     public function isAuthorized($user){
        if (isset($user['role']) && ($user['role'] === 'admin')) {  // Dla użytkownika o roli admin
            $allowedActions = ['edit','add','delete','view', 'index', 'logout','presence','addc']; // Pozwól na dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'user')) { // Dla użytkownika o roli user
            $allowedActions = ['logout'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'kursant')) { // Dla użytkownika o roli user
            $allowedActions = ['logout'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'teacher')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view','edit','add','delete','presence','addc'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'prowadzacy')) { // Dla użytkownika o roli teacher
            $allowedActions = ['index','logout','view','edit','add','delete','presence','addc'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
   
        return false;
        return parent::isAuthorized($user);
        }    

}
