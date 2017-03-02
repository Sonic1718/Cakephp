<?php

App::uses('AppModel', 'Model');


class Complaint extends AppModel {

  public $belongsTo = array('Subject','User','Location');

  public $hasMany = array(
                          'Picture' => array(
                              'className' => 'Picture',
                              'foreignKey' => 'complaint_id',
                              'dependent' => true,
                              'excclusive' => true
                           )
                   );


	public $validate = array(

		'subject_id' => array(
				'sub-1' => array(
					   'rule' => array('notEmpty'),
				   'required' => true,
					'message' => 'Select Subject'
				)
		),
		'message' => array(
            'rule' => array('minLength', '8'),
            'message' => 'Minimum 8 characters long'
        ),
    'risk' => array(
            'rule' => array('notEmpty'),
            'message' => 'Please choose one of these'
        )
	);



	public function total($date){
      
      $con = array('conditions'=>array('created >='=>$date.'-01-01','created <='=>$date.'-12-31'));
      $total = count($this->find('all',$con));
    	
    	$dataArray = array();
    	$list = array(1,2,3);
      	foreach ($list as $me) {
      		
      		for ($x=1 ; $x<=12 ; $x++){
      				$con = array('conditions'=>array('created >='=>$date.'-'.$x.'-01','created <='=>$date.'-'.$x.'-31','subject_id'=>$me));
     			    $monthTotal = count($this->find('all',$con));
     			    $dataArray[$me][$x] = $monthTotal; 		
      		}
      	}

      $dataArray['total']=$total;
    	
	return $dataArray;
	}

  public function byYear($year){

    //1 = land
    //2 = forest      
    //3 = wild

      //land for total to divide
      $landCondition = array('conditions'=>array('subject_id'=> 1 , 'created >=' => $year.'-01-01', 'created <=' => $year.'-12-31')); 
      $landTotal = count($this->find('all',$landCondition));

      //forest for total to divide
      $forestCondition = array('conditions'=>array('subject_id'=> 2 , 'created >=' => $year.'-01-01', 'created <=' => $year.'-12-31')); 
      $forestTotal = count($this->find('all',$forestCondition));

      //land for total to divide
      $wildCondition = array('conditions'=>array('subject_id'=> 3 , 'created >=' => $year.'-01-01', 'created <=' => $year.'-12-31')); 
      $wildTotal = count($this->find('all',$wildCondition));


        $list = array(1,2,3);
        foreach ($list as $me) {

          if ($me == 1) {
            $t = $landTotal;
            $dept = 'land';
          }

          if ( $me == 2) {
            $t = $forestTotal;
            $dept = 'forest';
          }

          if ( $me == 3) {
            $t = $wildTotal;
            $dept = 'wild';
          }
          
          for ($x=1 ; $x<=12 ; $x++){
              $con = array('conditions'=>array('created >='=> $year.'-'.$x.'-01','created <='=> $year.'-'.$x.'-31','subject_id'=>$me));
              @$dataArray[$dept][$x] = ( ( count($this->find('all',$con)) / $t ) * 100 );    
          }

        }

  return $dataArray;
  }

  public function byMonth($year,$from,$till){


  
      //land for total to divide
      $landCondition = array('conditions'=>array('subject_id'=> 1 , 'created >=' => $year.'-'.$from.'-01', 'created <=' => $year.'-'.$till.'-31')); 
      $landTotal = count($this->find('all',$landCondition));

      //forest for total to divide
      $forestCondition = array('conditions'=>array('subject_id'=> 2 , 'created >=' => $year.'-'.$from.'-01', 'created <=' => $year.'-'.$till.'-31')); 
      $forestTotal = count($this->find('all',$forestCondition));

      //land for total to divide
      $wildCondition = array('conditions'=>array('subject_id'=> 3 , 'created >=' => $year.'-'.$from.'-01', 'created <=' => $year.'-'.$till.'-31')); 
      $wildTotal = count($this->find('all',$wildCondition));    



      $months = array(1=>'Jan',2=>'Feb',3=>'Mar',4=>'Apr',5=>'May',6=>'Jun',7=>'Jul',8=>'Aug',9=>'Sep',10=>'Oct',11=>'Nov',12=>'Dec');
       
      $list = array(1,2,3);
      
      foreach ($list as $me) {
        if ( $me == 1 ) {
            $t = $landTotal;
            $dept = 'land';
        }
        if ( $me == 2 ) {
            $t = $forestTotal;
            $dept = 'forest';
        }
        if ( $me == 3 ) {
            $t = $wildTotal;
            $dept = 'wild';
        }
        
        for ($x=$from ; $x<=$till ; $x++){
          $con = array('conditions'=>array('created >='=> $year.'-'.$x.'-01','created <='=> $year.'-'.$x.'-31','subject_id'=>$me));
          @$dataArray[$dept][$x] = ( ( count($this->find('all',$con)) / $t ) * 100 );
           @$dataArray['months'][$x] = $months[$x];   
        }
      }

  return $dataArray;
  }

	
}

?>
