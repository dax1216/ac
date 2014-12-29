<?php
App::uses('AppController', 'Controller');
/**
 * Settings Controller
 *
 */
class SettingsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	var $name = 'Settings';

	public $helpers = array('Html', 'Form', 'Session');

    public $components = array('Session');

	public function beforeFilter() {
        //parent::beforeFilter();
       
    }

    public function index() {
    	$this->loadModel('Settings');

    	$this->set('settings', $this->Settings->find('all'));
        $this->layout = 'default';
    }

    public function view($id = null) {
        $this->settings->id = $id;
        $this->set('setting', $this->Settings->read());
    }

    public function save(){}

    public function add() {
        if ($this->request->is('post')) {
        	//$this->request->data['Settings']['user_id'] = $this->Auth->user('id');
        	var_dump($this->request->data);
            if ($this->Settings->save($this->request->data)) {
                $this->Session->setFlash('Your Settings has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to add your Settings.');
            }
        }
    }

    public function edit($id = null) {
	    $this->Settings->id = $id;
	    if ($this->request->is('get')) {
	        $this->request->data = $this->Settings->read();
	    } else {
	        if ($this->Settings->save($this->request->data)) {
	            $this->Session->setFlash('Your Settings has been updated.');
	            $this->redirect(array('action' => 'index'));
	        } else {
	            $this->Session->setFlash('Unable to update your Settings.');
	        }
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }
	    if ($this->Settings->delete($id)) {
	        $this->Session->setFlash('The Settings with id ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'index'));
	    }
	}
}
