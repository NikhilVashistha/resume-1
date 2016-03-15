<?php

App::uses('AppModel', 'Model');

Class Project extends AppModel {
	
	public $belongsTo = 'User';

	public function getProject($id) {
		return $this->find('all', array('conditions' => array('Project.user_id' => $id)));
	}
}