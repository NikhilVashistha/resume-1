<?php

App::uses('AppModel', 'Model');

Class Interest extends AppModel {
	
	public $belongsTo = 'User';
}