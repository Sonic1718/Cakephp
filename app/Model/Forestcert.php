<?php

App::uses('AppModel','Model');

class Forestcert extends AppModel {

	#public $hasMany = 'Forestcertapplication';

	public $validate = array(


		'establishment' => array(
			 'estab1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'estab2' => array(
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
		'supplier' => array(
			 'sup1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'sup2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'wppp' => array(
			 'wppp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'wppp2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'volume/duration' => array(
			 'vol1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'vol2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)








	);	
}