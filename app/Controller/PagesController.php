<?php

App::uses('AppController', 'Controller');


class PagesController extends AppController {

	var $uses = array(
                        'Application',
		        'Landagri',
		        'Landagriapplication',
		        'Landin',
		        'Landinapplication',
		        'Landmi',
		        'Landmiapplication',
		        'Landre',
		        'Landreapplication',
		        'Landcon',
		        'Landconapplication',
		        'Forestchain',
		        'Forestchainapplication',
		        'Forestwood',
		        'Forestwoodapplication',
		        'Forestlumb',
		        'Forestlumbapplication',
		        'Forestdealer',
		        'Forestdealerapplication',
		        'Forestcert',
		        'Forestcertapplication',
		        'Forestsup',
		        'Forestsupapplication',
		        'Forestplant',
		        'Forestplantapplication',
		        'Wildlifefarm',
		        'Wildlifefarmapplication',
		        'Wildlifelocal',
		        'Wildlifelocalapplication',
		        'Wildlifeexport',
		        'Wildlifeexportapplication',
		        'Wildlifeimport',
		        'Wildlifeimportapplication',
		        'Wildlifereexport',
		        'Wildlifereexportapplication',
		        'Wildlifespecial',
		        'Wildlifespecialapplication',
			'News',
			'Facts',
			'Announcements',
			'Contact'
	);


	public function index() {
		#for Facts
		$this->set('fact',$this->Facts->find('all',array('limit' => 1,'order'=>'rand()')));

		#for Announcement
		$this->set('announcement',$this->Announcements->find('all',array('limit' => 1,'order'=>'rand()')));
		
		#for News and Updates
		$this->set('news',$this->News->find('all',array('limit' => 3,'order'=>array('created DESC'))));
      
	}

	
    public function fact($id){
    		$this->set('fact',$this->Facts->findById($id));
    }

    public function announcement($id){
    		$this->set('announcement',$this->Announcements->findById($id));	
    }

    public function news($id){
    	    $this->set('new',$this->News->findById($id));
    }


	public function land($id) {
		// $user = $this->Auth->user();

	
	
		// $result = $this->Landapproval->findByUser_idAndLand($user['id'],$this->params['pass'][0]);

		// if($result['Landapproval']['status'] == NULL){

		// 		$model ="<script type='text/javascript'>
		// 				    $(window).load(function(){
		// 				        $('#myModal').modal('show');
		// 				    });
		// 				</script>
  //                       <div class='modal fade' id='myModal' role='dialog'>
  //                         <div class='modal-dialog'>
                          
  //                           <!-- Modal content-->
  //                           <div class='modal-content'>
  //                             <div class='modal-header bg-danger'>
  //                               <button type='button' class='close' data-dismiss='modal'>&times;</button>
  //                               <h4 class='modal-title'>Attention Applicant</h4>
  //                             </div>
  //                             <div class='modal-body'>
  //                               <p>You Must complete your requirements first.</p>
  //                             </div>
  //                             <div class='modal-footer'>
  //                               <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
  //                             </div>
  //                           </div>
                            
  //                         </div>
  //                       </div>
		// 					 ";
		// 		$this->set('model',$model);

		// 	$this->render('/Pages/applications');
		// }

		// if the form was submited
		if ( $this->request->is(array('post')) ) {
				
				$idform = $this->params['pass'][0];

				if ( $idform == 1){

       				    //set the data to model
				        $this->Landagri->set($this->request->data);
						if($this->Landagri->validates()){

										//if data save
										if ( $this->Landagri->save($this->request->data) ) {
											$this->Landagri->id = $this->Landagri->id;
											//generate random string 5 letters
											$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
				
											    $dateAssign = $this->Landagriapplication->checkCurrentDate();
											
												//save in Landagri TABLE
												$this->Landagri->save(array('pin'=>$gen.'-'.$this->Landagri->id));
												
												//save in Landagriapplication
												$this->Landagriapplication->save(array('landagri_id'=>$this->Landagri->id,'created'=>$dateAssign));
												
												$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Landagri->id,'good');
					
				
				                               	$model ="<script type='text/javascript'>
														    $(window).load(function(){
														        $('#myModal').modal('show');
														    });
														</script>
				 										 <div class='modal fade' id='myModal' role='dialog'>
						 								   <div class='modal-dialog'>
						 								   
						 								     <!-- Modal content-->
						 								     <div class='modal-content'>
						 								       <div class='modal-header bg-success'>
						 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
						 								         <h4 class='modal-title'>Attention Applicant</h4>
						 								       </div>
						 								       <div class='modal-body'>
						 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p><br>
                   		 								          <h2 class='text-danger'>NOTE</h2>
                   		 								          <h4>You Must Bring The requirements required to this application Form</h4>
                   		 								           <p>1. Tax Declamation</p>
                   		 								           <p>2. LRA Status / Court Clearance</p>
                   		 								           <p>3. Deed of Coveyance</p>
                   		 								           <p>4. Cadastral Map</p>
                   		 								           <p>6. Lot Data Computations / Technical Descriptions</p>

						 								       </div>
						 								       <div class='modal-footer'>
						 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
						 								       </div>
						 								     </div>
						 								     
						 								   </div>
						 								 </div>
						 								 ";
												$this->set('model',$model);
				
					      				} else {
										    // if data not save
											$this->Session->setFlash('Try Again','bad');
										}
						}

				}

				if ($idform == 2) {

					//set the data to model
					$this->Landin->set($this->request->data);

					if($this->Landin->validates()){

							//if data save
							if ( $this->Landin->save($this->request->data) ) {

								$this->Landin->id = $this->Landin->id;

							    //generate random string 5 letters
							    $gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
								//get avalable date
								$dateAssign = $this->Landinapplication->checkCurrentDate();
							    
							    $this->Landin->save(array('pin'=>$gen.'-'.$this->Landin->id));
								
								$this->Landinapplication->save(array('landin_id'=>$this->Landin->id,'created'=>$dateAssign));

							    $this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Landin->id,'good');

							    $model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       	 <br>
		 								       	 <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Tax Declamation</p>
                   		 								           <p>2. LRA Status / Court Clearance</p>
                   		 								           <p>3. Deed of Coveyance</p>
                   		 								           <p>4. Cadastral Map</p>
                   		 								           <p>6. Lot Data Computations / Technical Descriptions</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

							} else {
							    // if data not save
								$this->Session->setFlash('Try Again','bad');
							}

					}

				}

				if ($idform == 3) {

					//set the data to model
					$this->Landmi->set($this->request->data);

					if($this->Landmi->validates()){

							//if data save
							if ( $this->Landmi->save($this->request->data) ) {

								$this->Landmi->id = $this->Landmi->id;

							    //generate random string 5 letters
							    $gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
								//get avalable date
								$dateAssign = $this->Landmiapplication->checkCurrentDate();
							    
							    $this->Landmi->save(array('pin'=>$gen.'-'.$this->Landmi->id));
								
								$this->Landmiapplication->save(array('landmi_id'=>$this->Landmi->id,'created'=>$dateAssign));

							    $this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Landmi->id,'good');

							    $model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						 <p>1. Tax Declamation</p>
                   		 								           <p>2. LRA Status / Court Clearance</p>
                   		 								           <p>3. Deed of Coveyance</p>
                   		 								           <p>4. Cadastral Map</p>
                   		 								           <p>6. Lot Data Computations / Technical Descriptions</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

							} else {
							    // if data not save
								$this->Session->setFlash('Try Again','bad');
							}

					}

				}

				if ($idform == 4) {

					//set the data to model
					$this->Landre->set($this->request->data);

					if($this->Landre->validates()){

							//if data save
							if ( $this->Landre->save($this->request->data) ) {

								$this->Landre->id = $this->Landre->id;

							    //generate random string 5 letters
							    $gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
								//get avalable date
								$dateAssign = $this->Landreapplication->checkCurrentDate();
							    
							    $this->Landre->save(array('pin'=>$gen.'-'.$this->Landre->id));
								
								$this->Landreapplication->save(array('landre_id'=>$this->Landre->id,'created'=>$dateAssign));

							    $this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Landre->id,'good');

							    $model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Tax Declamation</p>
                   		 								           <p>2. LRA Status / Court Clearance</p>
                   		 								           <p>3. Deed of Coveyance</p>
                   		 								           <p>4. Cadastral Map</p>
                   		 								           <p>6. Lot Data Computations / Technical Descriptions</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

							} else {
							    // if data not save
								$this->Session->setFlash('Try Again','bad');
							}

					}

				}

				if ($idform == 5) {

					//set the data to model
					$this->Landcon->set($this->request->data);

					if($this->Landcon->validates()){

							//if data save
							if ( $this->Landcon->save($this->request->data) ) {

								$this->Landcon->id = $this->Landcon->id;

							    //generate random string 5 letters
							    $gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
								//get avalable date
								$dateAssign = $this->Landconapplication->checkCurrentDate();
							    
							    $this->Landcon->save(array('pin'=>$gen.'-'.$this->Landcon->id));
								
								$this->Landconapplication->save(array('landcon_id'=>$this->Landcon->id,'created'=>$dateAssign));

							    $this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Landcon->id,'good');

							    $model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Tax Declamation</p>
                   		 								           <p>2. LRA Status / Court Clearance</p>
                   		 								           <p>3. Deed of Coveyance</p>
                   		 								           <p>4. Cadastral Map</p>
                   		 								           <p>6. Lot Data Computations / Technical Descriptions</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

							} else {
							    // if data not save
								$this->Session->setFlash('Try Again','bad');
							}
					}

				}

	    }

	    //for land Agri
	    if($id == 1){
	   		$this->Set('entryNo',$this->Landagri->getLastInsertID()); 	
	    }

	    //for land insular
	    if($id == 1){
	   		$this->Set('entryNo',$this->Landagri->getLastInsertID()); 	
	    }

	    //for land miscellen
	    if($id == 1){
	   		$this->Set('entryNo',$this->Landagri->getLastInsertID()); 	
	    }

		//for land residen
	    if($id == 1){
	   		$this->Set('entryNo',$this->Landagri->getLastInsertID()); 	
	    }	   
		
		//for land application
	    if($id == 1){
	   		$this->Set('entryNo',$this->Landagri->getLastInsertID()); 	
	    }

	}

	public function forest($id) {


		// $user = $this->Auth->user();

	
	
		// $result = $this->Forestapproval->findByUser_idAndForest($user['id'],$this->params['pass'][0]);

		// if($result['Forestapproval']['status'] == NULL){

		// 		$model ="<script type='text/javascript'>
		// 				    $(window).load(function(){
		// 				        $('#myModal').modal('show');
		// 				    });
		// 				</script>
  //                       <div class='modal fade' id='myModal' role='dialog'>
  //                         <div class='modal-dialog'>
                          
  //                           <!-- Modal content-->
  //                           <div class='modal-content'>
  //                             <div class='modal-header bg-danger'>
  //                               <button type='button' class='close' data-dismiss='modal'>&times;</button>
  //                               <h4 class='modal-title'>Attention Applicant</h4>
  //                             </div>
  //                             <div class='modal-body'>
  //                               <p>You Must complete your requirents first </p>
  //                             </div>
  //                             <div class='modal-footer'>
  //                               <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
  //                             </div>
  //                           </div>
                            
  //                         </div>
  //                       </div>
		// 					 ";
		// 		$this->set('model',$model);

		// 	$this->render('/Pages/applications');
		// }



		// if the form was submited
		if ( $this->request->is(array('post', 'put')) ) {
				
				$idform = $this->params['pass'][0];

				if ( $idform == 1){

					//set the data to model
					$this->Forestchain->set($this->request->data);

					if($this->Forestchain->validates()){

						//if data save
						if ( $this->Forestchain->save($this->request->data) ) {
							$this->Forestchain->id = $this->Forestchain->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestchainapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestchain->save(array('pin'=>$gen.'-'.$this->Forestchain->id));
								
								//save in Landagriapplication
								$this->Forestchainapplication->save(array('forestchain_id'=>$this->Forestchain->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestchain->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p><br>
		 								          <h2>NOTE</h2>
		 								          <h4>You Must Bring The requirements required to this application Form</h4>
		 								           <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Chainsaw</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Chainsaw (e.g. brand, model, engine capacity)</p><br>
		 								           <p>6. Amount of Fees(P500.00 per chainsaw)</p>

		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 2){

				//set the data to model
					$this->Forestwood->set($this->request->data);

					if($this->Forestwood->validates()){


						//if data save
						if ( $this->Forestwood->save($this->request->data['Page']) ) {
							$this->Forestwood->id = $this->Forestwood->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestwoodapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestwood->save(array('pin'=>$gen.'-'.$this->Forestwood->id));
								
								//save in Landagriapplication
								$this->Forestwoodapplication->save(array('forestwood_id'=>$this->Forestwood->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestwood->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 3){

				//set the data to model
					$this->Forestlumb->set($this->request->data);

					if($this->Forestlumb->validates()){

						//if data save
						if ( $this->Forestlumb->save($this->request->data['Page']) ) {
							$this->Forestlumb->id = $this->Forestlumb->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestlumbapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestlumb->save(array('pin'=>$gen.'-'.$this->Forestlumb->id));
								
								//save in Landagriapplication
								$this->Forestlumbapplication->save(array('forestlumb_id'=>$this->Forestlumb->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestlumb->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						   <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 4){

					//set the data to model
					$this->Forestdealer->set($this->request->data);

					if($this->Forestdealer->validates()){

						//if data save
						if ( $this->Forestdealer->save($this->request->data['Page']) ) {
							$this->Forestdealer->id = $this->Forestdealer->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestdealerapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestdealer->save(array('pin'=>$gen.'-'.$this->Forestdealer->id));
								
								//save in Landagriapplication
								$this->Forestdealerapplication->save(array('forestdealer_id'=>$this->Forestdealer->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestdealer->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						   <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 5){

					//set the data to model
					$this->Forestcert->set($this->request->data);

					if($this->Forestcert->validates()){

						//if data save
						if ( $this->Forestcert->save($this->request->data['Page']) ) {
							$this->Forestcert->id = $this->Forestcert->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestcertapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestcert->save(array('pin'=>$gen.'-'.$this->Forestcert->id));
								
								//save in Landagriapplication
								$this->Forestcertapplication->save(array('forestcert_id'=>$this->Forestcert->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestcert->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 6){

					//set the data to model
					$this->Forestsup->set($this->request->data);

					if($this->Forestsup->validates()){

						//if data save
						if ( $this->Forestsup->save($this->request->data['Page']) ) {
							$this->Forestsup->id = $this->Forestsup->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestsupapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestsup->save(array('pin'=>$gen.'-'.$this->Forestsup->id));
								
								//save in Landagriapplication
								$this->Forestsupapplication->save(array('forestsup_id'=>$this->Forestsup->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestsup->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 7){

					//set the data to model
					$this->Forestplant->set($this->request->data);

					if($this->Forestplant->validates()){

						//if data save
						if ( $this->Forestplant->save($this->request->data['Page']) ) {
							$this->Forestplant->id = $this->Forestplant->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Forestplantapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Forestplant->save(array('pin'=>$gen.'-'.$this->Forestplant->id));
								
								//save in Landagriapplication
								$this->Forestplantapplication->save(array('forestplant_id'=>$this->Forestplant->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Forestplant->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Official Receipt</p><br>
		 								           <p>2. Stencil serial Number of Wood Plant</p><br>
		 								           <p>3. Duly accomplished Application Form</p><br>
		 								           <p>4. Detailed Specification of Wood Plant</p><br>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}



		}

	}


	public function wildlife($id) {

		// if the form was submited
		if ( $this->request->is(array('post', 'put')) ) {
				
				$idform = $this->params['pass'][0];

				if ( $idform == 1){

					//set the data to model
					$this->Wildlifefarm->set($this->request->data);

					if($this->Wildlifefarm->validates()){

						//if data save
						if ( $this->Wildlifefarm->save($this->request->data) ) {
							$this->Wildlifefarm->id = $this->Wildlifefarm->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifefarmapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifefarm->save(array('pin'=>$gen.'-'.$this->Wildlifefarm->id));
								
								//save in Landagriapplication
								$this->Wildlifefarmapplication->save(array('wildlifefarm_id'=>$this->Wildlifefarm->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifefarm->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Requirents</p>
                   		 						  <p>2. Requirents</p>
                   		 						  <p>3. Requirents</p>
                   		 						  <p>4. Requirents</p>
                   		 						  <p>6. Requirents</p>
                   		 						  <p>7. Requirents</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}
	
			if ( $idform == 2){

				//set the data to model
					$this->Wildlifelocal->set($this->request->data);

					if($this->Wildlifelocal->validates()){


						//if data save
						if ( $this->Wildlifelocal->save($this->request->data['Page']) ) {
							$this->Wildlifelocal->id = $this->Wildlifelocal->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifelocalapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifelocal->save(array('pin'=>$gen.'-'.$this->Wildlifelocal->id));
								
								//save in Landagriapplication
								$this->Wildlifelocalapplication->save(array('wildlifelocal_id'=>$this->Wildlifelocal->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifelocal->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> Copy Your Pin : ".$gen."-".$this->Landagri->id." and your appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								         <h2 class='text-danger'>NOTE</h2>
                   		 						 <h4>You Must Bring The requirements required to this application Form</h4>
                   		 						  <p>1. Requirents</p>
                   		 						  <p>2. Requirents</p>
                   		 						  <p>3. Requirents</p>
                   		 						  <p>4. Requirents</p>
                   		 						  <p>6. Requirents</p>
                   		 						  <p>7. Requirents</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 3){

				//set the data to model
					$this->Wildlifeexport->set($this->request->data);

					if($this->Wildlifeexport->validates()){


						//if data save
						if ( $this->Wildlifeexport->save($this->request->data['Page']) ) {
							$this->Wildlifeexport->id = $this->Wildlifeexport->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifeexportapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifeexport->save(array('pin'=>$gen.'-'.$this->Wildlifeexport->id));
								
								//save in Landagriapplication
								$this->Wildlifeexportapplication->save(array('wildlifelocal_id'=>$this->Wildlifeexport->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifeexport->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> 
		 								         Copy Your Pin : ".$gen."-".$this->Wildlifeexport->id." and your 
		 								         appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 4){

				//set the data to model
					$this->Wildlifeimport->set($this->request->data);

					if($this->Wildlifeimport->validates()){


						//if data save
						if ( $this->Wildlifeimport->save($this->request->data['Page']) ) {
							$this->Wildlifeimport->id = $this->Wildlifeimport->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifeimportapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifeimport->save(array('pin'=>$gen.'-'.$this->Wildlifeimport->id));
								
								//save in Landagriapplication
								$this->Wildlifeimportapplication->save(array('wildlifeimport_id'=>$this->Wildlifeimport->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifeimport->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> 
		 								         Copy Your Pin : ".$gen."-".$this->Wildlifeimport->id." and your 
		 								         appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 5){

				//set the data to model
					$this->Wildlifereexport->set($this->request->data);

					if($this->Wildlifereexport->validates()){


						//if data save
						if ( $this->Wildlifereexport->save($this->request->data['Page']) ) {
							$this->Wildlifereexport->id = $this->Wildlifereexport->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifereexportapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifereexport->save(array('pin'=>$gen.'-'.$this->Wildlifereexport->id));
								
								//save in Landagriapplication
								$this->Wildlifereexportapplication->save(array('wildlifereexport_id'=>$this->Wildlifereexport->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifereexport->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br>
		 								          Copy Your Pin : ".$gen."-".$this->Wildlifereexport->id." and your
		 								           appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

				if ( $idform == 6){

				//set the data to model
					$this->Wildlifespecial->set($this->request->data);

					if($this->Wildlifespecial->validates()){


						//if data save
						if ( $this->Wildlifespecial->save($this->request->data['Page']) ) {
							$this->Wildlifespecial->id = $this->Wildlifespecial->id;
							//generate random string 5 letters
							$gen = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
							
							    $dateAssign = $this->Wildlifespecialapplication->checkCurrentDate();
							
								//save in Landagri TABLE
								$this->Wildlifespecial->save(array('pin'=>$gen.'-'.$this->Wildlifespecial->id));
								
								//save in Landagriapplication
								$this->Wildlifespecialapplication->save(array('wildlifespecial_id'=>$this->Wildlifespecial->id,'created'=>$dateAssign));
								
								$this->Session->setFlash('Application Form Save, Your Pin : '.$gen.'-'.$this->Wildlifespecial->id,'good');
	

                               	$model ="<script type='text/javascript'>
										    $(window).load(function(){
										        $('#myModal').modal('show');
										    });
										</script>
 										 <div class='modal fade' id='myModal' role='dialog'>
		 								   <div class='modal-dialog'>
		 								   
		 								     <!-- Modal content-->
		 								     <div class='modal-content'>
		 								       <div class='modal-header bg-success'>
		 								         <button type='button' class='close' data-dismiss='modal'>&times;</button>
		 								         <h4 class='modal-title'>Attention Applicant</h4>
		 								       </div>
		 								       <div class='modal-body'>
		 								         <p>You Successfully applied your application form <br><br> 
		 								         Copy Your Pin : ".$gen."-".$this->Wildlifespecial->id." and your 
		 								         appointment day is ".date('Y-M-d',strtotime($dateAssign))." <br><br> Present this pin to DENR office.</p>
		 								       </div>
		 								       <div class='modal-footer'>
		 								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
		 								       </div>
		 								     </div>
		 								     
		 								   </div>
		 								 </div>
		 								 ";
								$this->set('model',$model);

	      				} else {

						    // if data not save
							$this->Session->setFlash('Try Again','bad');

						}
					} else {

						
					}
				}

		}

	}


	public function applications() {
		$this->set('Land',$this->Application->find('all',array('conditions'=>array('Application.application'=>1))));
		$this->set('Forest',$this->Application->find('all',array('conditions'=>array('Application.application'=>2))));
		$this->set('Wild',$this->Application->find('all',array('conditions'=>array('Application.application'=>3))));
		
	}

	public function faqs() {

	}

	public function contact() {
		
		if( $this->request->is('post') ){
			$this->Contact->set($this->request->data);
			if( $this->Contact->validates() ){
				$this->Contact->save($this->request->data);
				$this->Session->setFlash('Message Has Been Save','fgood');
				$this->redirect($this->request->here);
			}
		}
	}

	public function pdf( $dept , $formNo ){
      $this->layout = "pdfTemp";

	  $this->set('dept',$dept);
	  $this->set('formNo',$formNo);
	 
	  
	  //pr($this->request->data);
	  if ( $this->request->is('post') ){
	  		$this->set('data',$this->request->data);
	  }

	}




	 public function admin_application() {

	    //$this->layout = false;
		if ( $this->request->is('post') ) {
			$this->Application->set($this->request->data);
			if ( $this->Application->validates() ) {
				
				$dir = WWW_ROOT.'applications/'.$this->request->data['Application']['pdf_file']['name'];
				$filename = $this->request->data['Application']['pdf_file']['tmp_name'];
				
				if(move_uploaded_file($filename, $dir)){
					$data = [
					          'pdf_file'=>$this->request->data['Application']['pdf_file']['name'],
					          'application'=>$this->request->data['Application']['application']
					        ];
					if($this->Application->save($data)){
						$this->Session->setFlash('Application Add Successfully','fgood');
					}
				}
			}
		}
        
        }
}
