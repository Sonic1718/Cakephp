<?php

App::uses('AppModel','Model');

class Forestplant extends AppModel {

	#public $hasMany = 'Forestsupapplication';

	public $validate = array(

		'establishment' => array(
			 'es1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'es2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'name' => array(
			 'name1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'name2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'address' => array(
			 'add1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'add2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numeric allowed' 
			)
		),
		'forest-officer' => array(
			 'for1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'for2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)



	);	
}