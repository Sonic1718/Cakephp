<?php

App::uses('AppModel','Model');

class Forestchain extends AppModel {

#public $hasMany = 'Forestchainapplication';

		public $validate = array(

		'new' => array(
			 'new1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'new2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'renew' => array(
			 'renew1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'renew2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'exact-date' => array(
			 'exact1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'exact2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'red-concerned' => array(
			 'red1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'red2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'centro-concerned' => array(
			 'centro1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'centro2' => array(
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
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'contact-no' => array(
			 'con1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'con2' =>  array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'applicant-name' => array(
			 'app1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'app2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)






	);
}