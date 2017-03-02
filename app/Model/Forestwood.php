<?php

App::uses('AppModel','Model');

class Forestwood extends AppModel {

	#public $hasMany = 'Forestwoodapplication';

	public $validate = array(

		'type' => array(
			 'type1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'type2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'place-date' => array(
			 'place1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'place2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'contact-email' => array(
			 'ce1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ce2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'type-of-processing-plant' => array(
			 'tpp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tpp2' => array(
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
		'permit-operate' => array(
			 'pemo1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pemo2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'plant-name' => array(
			 'plan1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'plan2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'plant-location' => array(
			 'planlo1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'planlo2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'timber-license-agreement-no' => array(
			 'tim1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tim2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		're-sawmill' => array(
			 're1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 're2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'capital-investment' => array(
			 'cap1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cap2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'total-employed' => array(
			 'tote1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tote2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'name-plant' => array(
			 'nap1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'nap2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'plant-supplied' => array(
			 'plans1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'plans2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'permit-no-sawmill' => array(
			 'pemos1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pemos2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'operate-sawmill-date' => array(
			 'opes1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'opes2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
		'year-operated' => array(
			 'yo1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'yo2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
			)
		),
		'permit-applied-for' => array(
			 'opes1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'opes2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'permit-fee' => array(
			 'pemf1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pemf2' => array(
			 	'rule' => 'numeric',
			 'message' => 'numeric only'
			)
		),
		'cash-bond-fee' => array(
			 'cas1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cash2' => array(
			 	'rule' => 'numeric',
			 'message' => 'numeric only'
			)
		),
		'machine-type' => array(
			 'mat1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'mat2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'applicant-address' => array(
			 'appas1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'appa2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numeric allowed' 
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
		'applicant-name' => array(
			 'appn1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'appn2' => array(
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
			 'message' => 'numeric only'
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
			 'year2' => 'numeric',
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
		),
		'tax-cert-no' => array(
			 'tax1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tax3' => 'numeric',
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only'
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
		'tin-no' => array(
			 'tin1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tin2' => array(
			 	'rule' => '/^[0-9][-][0-9][-][0-9][-][0-9]+$/',
			 'message' => 'Only numbers allowed' 
			),
			 'tin3' => 'numeric',
			 	'rule' => 'numeric',
			 'message' => 'Only numeric'
		),
		'team-leader' => array(
			 'tl1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tl2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)





	);	
}