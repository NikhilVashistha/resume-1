<?php

App::uses('AppModel', 'Model');

Class CoverLetter extends AppModel {
	
	public $belongsTo = 'User';
}