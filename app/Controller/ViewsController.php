<?php

App::uses('AppController', 'Controller');

Class ViewsController extends AppController {

	public $layout = 'post';
	public $uses = array();

	public function index($id = 2) {
		if(!empty($this->request->params['pass'])) {
			$id = $this->request->params['pass'][0];
		}
		$this->loadModel('User');
		$userData = $this->User->findUser($id);
		$this->set('userData', $userData[0]);
	}

	public function blog() {

	}

	public function contact() {

	}

	public function project($userId) {
		$this->loadModel('Project');
		$projectData = $this->Project->getProject($userId);
		$this->set('projectData', $projectData);
	}
}