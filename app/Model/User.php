<?php

App::uses('AppModel', 'Model');


class User extends Model {
	

	public $validate = array(
			'fname' => array(
				'notEmpty' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your firstname',
				),
			 	'rule' => '/^[a-zA-Z ]+$/',
			 	'message' => 'Only letters allowed'
			),
			'lname' => array(
				'notEmpty' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please enter your lastname',
				),
			),
			'username' => array(
				'notEmpty' => array(
					'rule' => array('between',5,15),
					'message' => 'The username must be between 5 and 15 characters.',
				),
				'unique'=>array(
					'rule'=> 'isUnique',
					'message'=>'Username is Already exist please try another'
				),
			),
			'email' => array(
				'notEmpty'=>array(
					'rule'=>array('email', true),
					'message'=>'Please enter valid email address'
					),
				'unique'=>array(
					'rule'=> 'isUnique',
					'message'=>'Email is Already exist please try another'
					),
				),
			'password'=>array(
				'notEmpty'=> array(
					'rule'=> array('between', 8, 40),
					'message'=>'Your password must be between 8 and 40 characters.'
				),
				'matchPasswords' => array(
					'rule'=> array('matchPasswords'),
					'message'=>'Your password do not match'
					),
				),
			'phone2'=>array(
				'notEmpty'=> array(
					'rule'=> array('notEmpty'),
					'message'=>'Please fill this form.'
				),
				'phone12' => array(
			        'last'       => true,
			        'rule'       => array('minLength', 7),
			        'message'    => 'This field has a minimum length of 7 characters'
			    ),
			    'phone13' => array(
			        'last'       => true,
			        'rule'       => array('maxLength', 7),
			        'message'    => 'This field has a maximum length of 7 characters'
			    ),
			),
			'phone' => array(
				'notEmpty' => array(
					'rule' => array('notEmpty'),
					'message' => 'Please provide your mobile number.',
				),
				// 'unique'=>array(
				// 	'rule'=> 'isUnique',
				// 	'message'=>'Number is Already exist please try another'
				// ),
				'phone-1'=>array(
					'rule'=> '/^09/',
					'message'=>'Please enter a valid 11 digit phone number.'
				),
				'phone-2' => array(
			        'last'       => true,
			        'rule'       => array('Numeric'), 
			        'message'    => 'Please enter a valid 11 digit phone number (digits only)'
			     ),
				'phone-3' => array(
			        'last'       => true,
			        'rule'       => array('minLength', 11),
			        'message'    => 'This field has a minimum length of 11 characters'
			    ),
			    'phone-4' => array(
			        'last'       => true,
			        'rule'       => array('maxLength', 11),
			        'message'    => 'This field has a maximum length of 11 characters'
			    ),
			),
		);


	public function matchPasswords($data){
		if($data['password'] == $this->data['User']['confirm_password']){
			return true;
		}
		$this->invalidate('confirm_password', 'Your passwords do not match');
    return false;
	}



	public function beforeSave($options = array()){
	 	if(isset($this->data[$this->alias]['password'])){ 	
		 	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	 	}
	return true;
	}

	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>