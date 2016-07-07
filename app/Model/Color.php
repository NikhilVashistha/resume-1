<?php

App::uses('AppModel', 'Model');

Class Color extends AppModel {
	
	public $belongsTo = array('User', 'Look');
}