<?php

App::uses('AppModel','Model');

class Landin extends AppModel {
	

	#public $hasMany = 'Landinapplication';

	public $validate = array(

		'lot' => array(
			 'lot1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'lot2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			 )
		),
		'block' => array(
			 'block1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'block2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			 ) 
		),
		'psd' => array(
			 'psd1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'psd2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'phase' => array(
			 'pha1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'pha2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
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
		'birth-date' => array(
			 'bd1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'bd2' => array(
			 	'rule' => '/^[a-zA-Z0-9 ]+$/',
			 'message' => 'Only alpha numerics allowed' 
			)
		),
    	'post-address' => array(
			 'post1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'post2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only alpha numerics allowed'
			)
		),
		'spouse-name' => array(
			 'spouse1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'spouse2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'land-applied' => array(
			 'applied1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'applied2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'investment-fee' => array(
			 'if1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'if2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'total-investment' => array(
			 'ti1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'ti2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'not-mortgage' => array(
			 'nm1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'nm2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'position' => array(
			 'p1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'p2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'corporation-name' => array(
			 'cn1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'cn2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'total-hectare' => array(
			 'total1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'total2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'land-virtue' => array(
			 'land1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'land2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'tin' => array(
			 'tin1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'tin2' => array(
			 	'rule' => '/^[0-9][-][0-9][-][0-9][-][0-9]+$/',
			 'message' => 'Only numbers allowed' 
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
		'municipalityy' => array(
			 'mun1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'mun2' => array(
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
		'applicant-name' => array(
			 'yname1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'yname2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'day' => array(
			 'day1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'day2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
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
			 'years1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'years2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'person-appeared' => array(
			 'pa1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'pa2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'certificate-no' => array(
			 'cert1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'cert2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
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
		'issued-day' => array(
			 'id1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'id2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'issued-month' => array(
			 'im1' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			),
			 'im2' => array(
			 	'rule' => '/^[a-zA-Z ]+$/',
			 'message' => 'Only letters allowed' 
			)
		),
		'issued-year' => array(
			 'iy1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'iy2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		),
		'certificate-old' => array(
			 'io1' => array(
			 	   'rule' => 'numeric',
			    'message' => 'numeric only'
			 ),
			 'io2' => array(
			 	'rule' => 'notEmpty',
			 'message' => ''
			)
		)





	);
}