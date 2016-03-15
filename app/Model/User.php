<?php

App::uses('AppModel', 'Model');

Class User extends AppModel {

	public $hasMany = array('Project', 'Education', 'Experience', 'Interest', 'Skill', 'CoverLetter', 'Color', 'Reference');

	public function findUser($id) {
		return $this->find('all', array('conditions' => array('User.id' => $id)));
	}
}