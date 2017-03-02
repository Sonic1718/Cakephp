<?php

App::uses('AppModel', 'Model');

class Application extends AppModel {
  
  
	public $validate = array(
		 'pdf_file' => array(
		 	    'fi' => array(
		 	      'rule' => array('extension',array('pdf')),
        	      'message' => 'Please supply a valid pdf File..'	
		 	    ),
		 	    'fi2' => array(
		 	    	'rule' => array('isUnique'),
		 	    	'message' => 'PDF already exists..'
		 	    )
		 ),
		 'application' => array(
		 	   'app' => array(
		 	   		'rule' => array('notEmpty'),
		 	   		'message' => 'Select Category..'
		 	   	)
		 )
	);



	public function checkSize(){
		if ($this->data['Application']['pdf_file']['size'] > 2097152 ) {
			return true;
		}
	return false;
	}

}
