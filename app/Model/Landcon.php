<?php

App::uses('AppModel','Model');

class Landcon extends AppModel {

	#public $hasMany = 'Landreapplication';

	public $validate = array(

		'purposes' => array(
			 'pur1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pur2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'barrio' => array(
			 'bar1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bar2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'municipality' => array(
			 'mun1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'mun2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'province' => array(
			 'pro1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pro2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'area' => array(
			 'area1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'area2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'permit-no' => array(
			 'per1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'per2' =>  array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric only'
			)
		),
		'use-of-land' => array(
			 'ul1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ul2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'your-name' => array(
			 'yname1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'yname2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'age' => array(
			 'age1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'age2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'birthplace' => array(
			 'bp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bp2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'employed-in' => array(
			 'ei1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ei2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'citizen' => array(
			 'cit1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cit2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'post-address' => array(
			 'post1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'post2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'spouse' => array(
			 'spouse1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'spouse2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'spouse-citizen' => array(
			 'scit1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'scit2' => array(
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
		'title-holder' => array(
			 'th1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'th2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'land' => array(
			 'land1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'land2' => array(
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
		'tax-acct-no' => array(
			 'tn1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tn2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'witness-name1' => array(
			 'wn1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'wn2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'address1' => array(
			 'add1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'add2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'witness-name2' => array(
			 'wn1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'wn2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'address2' => array(
			 'add1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'add2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'day' => array(
			 'day1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'day2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only' 
			)
		),
		'month' => array(
			 'month1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'month2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'year' => array(
			 'year1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'year2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'your-address' => array(
			 'ya1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ya2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'certificate-no' => array(
			 'cert1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cert2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only' 
			)
		),
		'issued-on' => array(
			 'io1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'io2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'issued-in' => array(
			 'ii1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ii2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)





	);	
}