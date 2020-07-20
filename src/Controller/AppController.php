<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
//to ponizej wykomentowac
        /*$this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash'); */

        
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
 
        $this->loadComponent('Auth', [
            'loginRedirect' => ['controller' => 'Users', 'action' => 'start'],
            'authError' => 'Brak prawa dostępu!', //wyswietla blad ze niezalogowani/nie upowaznieni do dostepu uzytkownicy nie maja prrawa wejsc w dana zakladke
            'loginAction' => ['controller'=>'Users','action'=>'login'],
            'logoutRedirect' => ['controller' => 'Users','action' => 'login'],
            'authorize' => ['Controller'],
         ]); 
         

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeRender(Event $event){



        //spr czy jestesmy zalogowani i usuwa zbedne "przyciski" z paska
        if($this->request->session()->read('Auth.User')){
            $this->set('loggedIn', true);
        } else {
            $this->set('loggedIn', false);
        } 
       
    }

    //co moze zrobic uzytkownik ktory nie jest zalogowany
   public function beforeFilter(Event $event){
        $this->Auth->allow(['register']);
    }






    public function isAuthorized($user){
        if (isset($user['role']) && ($user['role'] === 'admin')) {  // Dla użytkownika o roli admin
            $allowedActions = ['edit','add','delete','view', 'index', 'logout','start','startadmin','startteacher','startuser']; // Pozwól na dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'user')) { // Dla użytkownika o roli student
            $allowedActions = ['index','logout','start'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
          if (isset($user['role']) && ($user['role'] === 'kursant')) { // Dla użytkownika o roli student
            $allowedActions = ['index','logout','start'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'teacher')) { // Dla użytkownika o roli student
            $allowedActions = ['index','logout','start'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
        if (isset($user['role']) && ($user['role'] === 'prowadzacy')) { // Dla użytkownika o roli student
            $allowedActions = ['index','logout','start'];  // Przyznaj dostęp do tych akcji w tym kontrolerze
        if(in_array($this->request->action, $allowedActions)) {
            return true; }
        }
   
        return false;
        return parent::isAuthorized($user);
    }

}
