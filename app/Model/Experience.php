<?php

App::uses('AppModel', 'Model');

Class Experience extends AppModel {
	
		public $belongsTo = 'User';
}