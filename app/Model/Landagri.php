<?php

App::uses('AppModel','Model');

class Landagri extends AppModel {

	#public $hasMany = 'Landagriapplication';

	public $validate = array(

		'period' => array(
			 'per1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 )
		),
		'tract' => array(
			 'tra1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
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
			    'message' => 'numeric only'
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
			 'sc1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'sc2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'beneficial' => array(
			 'bene1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bene2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'applied' => array(
			 'applied1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'applied2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'purposed' => array(
			 'pur1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pur2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'kinds-of-purposed' => array(
			 'kp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'kp2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'your-position' => array(
			 'yp1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'yp2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		)





	);
}