<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class DashboardController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;

	public function beforeFilter() {
        //parent::beforeFilter();
       
    }

    public function index() {
        $this->layout = 'default';
    }



}
