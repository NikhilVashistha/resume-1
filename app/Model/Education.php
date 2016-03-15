<?php

App::uses('AppModel', 'Model');

Class Education extends AppModel {
	
	public $belongsTo = 'User';
}