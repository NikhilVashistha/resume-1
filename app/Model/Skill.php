<?php

App::uses('AppModel', 'Model');

Class Skill extends AppModel {
	
	public $belongsTo = 'User';
}