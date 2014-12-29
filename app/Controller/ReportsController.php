<?php
App::uses('AppController', 'Controller');
/**
 * Reports Controller
 *
 */
class ReportsController extends AppController {

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
