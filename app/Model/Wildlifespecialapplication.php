<?php

App::uses('AppModel','Model');

class Wildlifespecialapplication extends AppModel {
	
	public function checkCurrentDate() {

		$i=0;
   		     
   		while (    $this->find( 'count' , array('conditions'=>array('Wildlifespecialapplication.created'
            =>date('Y-m-d',strtotime('+'.$i.' days'))))) == 5 
   				 	   || 
   				 	   $this->find( 'count' , array('conditions'=>array('Wildlifespecialapplication.created'
                        =>date('Y-m-d',strtotime('+'.$i.' days'))))) >= 5
   				 ){
   		$i++;
   		}
   	
   		$date = date('Y-m-d',strtotime('+'.$i.' days'));
   	

   	
   	return $date;
	}
}