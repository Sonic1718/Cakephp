<?php
App::uses('AppModel', 'Model');

class Contact extends AppModel {
  
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
    'email' => array(
        'notEmpty'=>array(
          'rule'=>array('notEmpty'),
          'message'=>'Email is Required'
          ),
        'checkemail'=>array(
          'rule'=>array('email', true),
          'message'=>'Please enter valid email address'
          )
    ),
      'telephone' => array(
        'tel1' => array(
          'rule' => 'notEmpty',
          'message' => ''
      ),
	'tel2' => array(
           'rule' => 'numeric',
           'message' => 'Numeric Only'
      )
    ),
      'message' => array(
        'msg1' => array(
          'rule' => 'notEmpty',
          'message' => ''     
        )
    )

	);

}
