<?php

App::uses('AppModel', 'Model');

Class Look extends AppModel {
	
	public $hasMany = 'Color';
}