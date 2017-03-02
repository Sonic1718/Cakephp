<?php

App::uses('AppModel','Model');

class Wildlifefarm extends AppModel {

	#public $hasMany = 'Wildlifefarmapplication';

	public $validate = array(


		'region' => array(
			 'region1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'region2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numeric allowed' 
			)
		),
		'exact-date' => array(
			 'exact-date1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'exact-date2' => array(
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
		'citizenship' => array(
			 'cit1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cit2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'work' => array(
			 'work1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'work2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
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
		'organization-name' => array(
			 'oname1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'oname2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'kind-species' => array(
			 'ks1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ks2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'kind-species-no' => array(
			 'kso1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'kso3' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric only'
			)
		),
		'collection-techniques' => array(
			 'tech1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tech2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'authorized-name' => array(
			 'auname1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'auname2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'application-fee' => array(
			 'appf1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'appf2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric only'
			)
		),
		'receipt-no' => array(
			 'rno1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'rno2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric only'
			)
		),
		'date-enclosed' => array(
			 'date1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'date2' => array(
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
		'day' => array(
			 'day1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'day2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric only'
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
			 'message' => 'Numeric only'
			)
		),
		'tax-cert-no' => array(
			 'month1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'month2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numeric allowed' 
			)
		),
		'issued-at' => array(
			 'ia1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ia2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
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
		'issued-year' => array(
			 'iy1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'iy2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only' 
			)
		),
		'officer-name' => array(
			 'on1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'on2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)





	);
}
