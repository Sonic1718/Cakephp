<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::import('Vendor', 'ChikkaSMS/ChikkaSMS');

class ComplaintsController extends AppController {
	 
	

	public function display() {
		
	}


	public function complaint() {
		$this->layout = "complaint";
		if($this->request->is('post')){	
			$this->loadModel('User');	
			$this->Complaint->set($this->request->data);
			$this->Complaint->Picture->set($this->request->data);
			if($this->Complaint->validates() && $this->Complaint->Picture->validates() ){	
				//get the extenion file
				$ext = end((explode('.',$this->request->data['Picture']['image']['name'])));
				$newName = time().'.'.$ext;
		
				//upload directory
				$dir = WWW_ROOT.'/picture/'.$newName;
				$filename = $this->request->data['Picture']['image']['tmp_name'];
				
				  if(move_uploaded_file($filename, $dir)){
					if( $this->Complaint->save($this->request->data['Complaint']) && 
						$this->Complaint->Picture->save(array('complaint_id'=>$this->Complaint->id,'image' => $newName))){

							$this->Session->write('promp',"<script src='/js/jquery.js'></script>
						             <script type='text/javascript'>
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
                      				         <h4 class='modal-title'>Attention Complainant</h4>
                      				       </div>
                      				       <div class='modal-body'>
                      				         <p>Your Complaint Successfully Submitted</p>
                      				       </div>
                      				       <div class='modal-footer'>
                      				         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                      				       </div>
                      				     </div>
                      				     
                      				   </div>
                      				 </div>
                      				 ");
					

						 $this->redirect('complaint');


					} else {
						$this->Session->Setflash('Please try Again');
						$this->redirect($this->request->here);
					}
				  } else {
				  	$this->Session->Setflash('Please try Again');
				  	$this->redirect($this->request->here);
				  }
			}
		 $this->set('posts', $this->paginate());

	   }

	  $this->set('subjects',$this->Complaint->Subject->find('all'));
    }

    public function member_complaint() { 
		$this->layout = 'member';
		
		$this->paginate = array(
			'limit' => 5
		);

		if($this->request->is('ajax')){
			$this->layout = '';
		}

		$this->set('posts', $this->paginate('Complaint'));
	}

	public function member_viewcomplaint($id){

		$result = $this->Complaint->findById($id);
		$this->set('result',$result);

		$this->loadModel('User');
		$user = $this->User->findById($result['Complaint']['user_id']);

		if ( $this->request->is('post') ) {
			// email notification
				$message = '<br><h3>' . $result['Subject']['subject'] . '</h3><br>'. $result['Complaint']['message'];
				$Email = new CakeEmail('default');
				$Email->template('denr');
				$Email->viewVars($message);
				$Email->emailFormat('html');
				$Email->to($user['User']['email']);
				$Email->subject('About');
				$Email->send();

			// sms notification
				$id = uniqid();
				$number = $user['User']['phone'];
				$message = "Your Complaint has been receive and will be process within 15 days..From DENR";
				$clientId = 'c1e4405af0e3c2cb003ab99b4ee45bc76e83b065e03a4c76cc982e170c97cbc5';
				$secretKey = '49f09da3a4d008dccac22635e523330d186b8443773fff8b5297d9106e87969d';
				$shortCode = '2929030850';
					$chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
					$response = $chikkaAPI->sendText($id, $number, $message);

			header("HTTP/1.1 " . $response->status . " " . $response->message);
			// exit($response->description);

				$this->Session->write('promp',
						"<script type='text/javascript'>
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
								         <h4 class='modal-title'>Attention Admin Personnel</h4>
								       </div>
								       <div class='modal-body'>
								         <p>You Successfully Submitted text and email Notification to Complainant..</p>
								       </div>
								       <div class='modal-footer'>
								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
								       </div>
								     </div>
								     
								   </div>
								 </div>
						"
					);

					$this->redirect($this->referer());
		}
	}

	public function member_deletecomplaint($id){

		$result = $this->Complaint->findById($id);
		
		if (unlink(WWW_ROOT.'picture/'.$result['Picture'][0]['image'])) {
			$this->Complaint->delete($id, true);
		    $this->redirect('/member/Complaints/complaint');
		}
	}


        public function admin_complaint() { 
		$this->layout = 'admin';
		
		$this->paginate = array(
			'limit' => 11
		);

		if($this->request->is('ajax')){
			$this->layout = '';
		}

		$this->set('posts', $this->paginate('Complaint'));
	}

	public function admin_complaintList() { 
		$this->layout = 'admin';
		
		$this->paginate = array(
			'limit' => 6
		);

		if($this->request->is('ajax')){
			$this->layout = '';
		}

		$this->set('posts', $this->paginate('Complaint'));
	}

	public function admin_complaintprint($table = null){
		    $this->layout='pdfTemp';
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));
			
			$this->set('table',$this->request->data['Complaint']['table']);
			
	}


	
	public function member_complaintList() { 
		$this->layout = 'admin';
		
		$this->paginate = array(
			'limit' => 6
		);

		if($this->request->is('ajax')){
			$this->layout = '';
		}

		$this->set('posts', $this->paginate('Complaint'));
	}

	public function member_complaintprint($table = null){
		    $this->layout='pdfTemp';
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));
			
			$this->set('table',$this->request->data['Complaint']['table']);
			
	}



	public function admin_viewcomplaint($id){

		$result = $this->Complaint->findById($id);
		$this->set('result',$result);

		$this->loadModel('User');
		$user = $this->User->findById($result['Complaint']['user_id']);

		if ( $this->request->is('post') ) {
			// email notification
				$message = '<br><h3>' . $result['Subject']['subject'] . '</h3><br>'. $result['Complaint']['message'];
				$Email = new CakeEmail('default');
				$Email->template('denr');
				$Email->viewVars($message);
				$Email->emailFormat('html');
				$Email->to($user['User']['email']);
				$Email->subject('About');
				$Email->send();

			// sms notification
				$id = uniqid();
				$number = $user['User']['phone'];
				$message = "Your Complaint has been receive and will be process within 15 days..From DENR";
				$clientId = 'c1e4405af0e3c2cb003ab99b4ee45bc76e83b065e03a4c76cc982e170c97cbc5';
				$secretKey = '49f09da3a4d008dccac22635e523330d186b8443773fff8b5297d9106e87969d';
				$shortCode = '2929030850';
					$chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
					$response = $chikkaAPI->sendText($id, $number, $message);

			header("HTTP/1.1 " . $response->status . " " . $response->message);
			// exit($response->description);

				$this->Session->write('promp',
						"<script type='text/javascript'>
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
								         <h4 class='modal-title'>Attention Admin Personnel</h4>
								       </div>
								       <div class='modal-body'>
								         <p>You Successfully Submitted text and email Notification to Complainant..</p>
								       </div>
								       <div class='modal-footer'>
								         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
								       </div>
								     </div>
								     
								   </div>
								 </div>
						"
					);

					$this->redirect($this->referer());
		}
	}

	public function admin_deletecomplaint($id  = null){

		$result = $this->Complaint->findById($id);
		
		if (unlink(WWW_ROOT.'/picture/'.$result['Picture'][0]['image'])) {
			$this->Complaint->delete($id, true);
		    $this->redirect('/admin/Complaints/complaint');
		}

	}



}
