<?php

App::uses('AppModel','Model');

class Landre extends AppModel {

	#public $hasMany = 'Landreapplication';

	public $validate = array(

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
			 'message' => 'Only numbers & letters allowed' 
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
		'civil-status' => array(
			 'civ1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'civ2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'sex' => array(
			 'sex1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'sex2' => array(
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
		'guardian' => array(
			 'guar1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'guar2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'birth-date' => array(
			 'bd1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bd2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only numbers & letters allowed' 
			)
		),
		'birth-place' => array(
			 'bp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bp2' => array(
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
		'contact' => array(
			 'con1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'con2' => array(
			   'rule' => 'numeric',
			'message' => 'Numeric  only'
			)
		),
		'street' => array(
			 'st1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'st2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only numbers & letters allowed' 
			)
		),
		'barangay' => array(
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
		'lot' => array(
			 'lot1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'lot2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only' 
			)
		),
		'block' => array(
			 'block1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'block2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only numbers allowed' 
			)
		),
		'survey' => array(
			 'sur1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'sur2' => array(
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
		'predecessor-in-interest' => array(
			 'pre1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pre2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'date-entry' => array(
			 'date1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'date2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only numbers & letters allowed' 
			)
		),
		'applicant-name' => array(
			 'an1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'an2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'ctc-id' => array(
			 'ctc1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'ctc2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only numbers & letters allowed' 
			)
		),
		'issued-on' => array(
			 'io1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'io2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only numbers & letters allowed' 
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
		'years' => array(
			 'y1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'y2' => array(
			 	'rule' => 'numeric',
			 'message' => 'Numeric Only' 
			)
		)



	);
}