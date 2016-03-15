<?php

App::uses('AppController', 'Controller');

Class UsersController extends AppController {

	var $scaffold ;

	public function getUserData($id) {
		$this->autoRender = false;
        $this->layout = '';
         if($this->request->is('GET')) {
	        $userId = $id;
	    	$userData = $this->User->findUser($userId);
	    	return json_encode($userData);
	    }
    }
}