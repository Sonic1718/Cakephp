<?php
class Facts extends AppModel {
  
    public $validate = array(
		    'title' => array(
              'rule-1' => array(
                   'rule' => array('notEmpty'),
                   'message' => 'Title must not empty'
              )
        )
        ,
       		 'image' => array(
		        'rule' => array('extension',array('gif', 'jpeg', 'png', 'jpg')),
        	        'message' => 'Please supply a valid image.'
    		),
    		'description' => array(
  			 'rule-1' => array(
  				'rule' => array('notEmpty'),
  				'message' => 'Description must not empty'
  					  )
    		)
	);

}
