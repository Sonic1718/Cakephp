<?php

App::uses('AppModel','Model');

class Picture extends AppModel {

	
	public $belongsTo = array(
			'Complaint'=>array(
				'className'=>'Complaint',
                'foreignKey'=>'complaint_id'
                    ),
			'User'=>array(
				'className'=>'User',
                'foreignKey'=>'user_id'
                	)
                );

	public $validate = array(
		    'image' => array(
		    	       'rule' => array('extension',array('gif', 'jpeg', 'png', 'jpg')),
        	        'message' => 'Please supply a valid image.'
    		)
	);
}