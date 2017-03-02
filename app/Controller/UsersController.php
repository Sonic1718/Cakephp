<?php

App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');

App::import('Vendor', 'ChikkaSMS/ChikkaSMS');

class UsersController extends AppController {

	var $uses = array('User','Post');

  public $components = array('Paginator','Security' => array(
                                            'csrfExpires'=> '+1 hour',
                                            'csrfUseOnce'=> false
                                          )
                              );

public function beforeFilter() {
        parent::beforeFilter();
        $this->Security->blackHoleCallback = 'blackhole';
        
  }

public function blackhole() {
      #redirect_to($this->here);
  }


  public $paginate = array(
        'limit' => 5,
        'order' => array(
            'User.username' => 'desc'
        )
    );  

public function sms() {
  
}

	public function login(){
		//pr($this->request->data);
		$this->layout = 'loginregister';
		if($this->request->is('post')){
			if ($this->Auth->login()) {
		    	if($this->Auth->user('role') == 'admin') {
			        $this->redirect('/admin/posts');
		    	}else if($this->Auth->user('role') == 'member') {
			        $this->redirect('/member/posts');
		    	} else {
		    		 return $this->redirect('/');
		    	} 
			}else{
				$this->Session->setFlash('Invalid Username or Password!');
			}
		}
	}

	public function logout(){
		$this->Auth->logout();
		$this->redirect('/users/login');
	}

	public function admin_member(){
		if($this->request->is('post')){	
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('New Member has been Added');
				return $this->redirect(array('action'=>'member'));
			}else{
				$this->Session->setFlash('Could not be registered');
			}
		}
	}

	public function profile($id = null) {
		if($this->request->is('post')){
			$data = $this->User->findById($id);
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);
            if($this->User->validates() ){     
                $this->User->id = $id;
                  	move_uploaded_file($this->request->data['User']['picture']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/img/' . $this->request->data['User']['picture']['name']);
                    	if($this->User->save(array('picture' => $this->request->data['User']['picture']['name']))){

                         $this->Session->write('upload',"<script src='/js/jquery.js'></script>
						             <script type='text/javascript'>
                      				    $(window).load(function(){
                      				        $('#myModal').modal('show');
                      				    });
                      				 </script>
                      				 <div class='modal fade' id='myModal' role='dialog'>
                      				   <div class='modal-dialog'>
                      				   
                      				     <!-- Modal content-->
                      				     <div class='modal-content'>
                      				       <div class='modal-header bg-primary'>
                      				         <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      				         <h4 class='modal-title'>Success</h4>
                      				       </div>
                      				       <div class='modal-body'>
                      				         <p>Successfully Change</p>
                      				         <p>All changes will apply after you login again</p>
                      				       </div>
                      				       <div class='modal-footer'>
                      				         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                      				       </div>
                      				     </div>
                      				     
                      				   </div>
                      				 </div>
                      				 ");
							$this->redirect(array('controller' => 'Pages', 'action' => 'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                            }

                  $this->request->data = $data;
            }
		}
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->set('user', $this->User->find('first',$options));
	}

    public function verify($id) {
      $user = $this->User->findById($id);
      if($this->request->is('post')){
          $this->set($this->request->data);
          $this->User->set($this->request->data);    
              $this->User->id = $id;
                if($this->request->data['User']['phone_verification'] == $user['User']['phone_verification']){
                  if($this->User->save($this->request->data)){

                       $this->Session->write('verified',"<script src='/js/jquery.js'></script>
                         <script type='text/javascript'>
                                  $(window).load(function(){
                                      $('#myModal').modal('show');
                                  });
                               </script>
                               <div class='modal fade' id='myModal' role='dialog'>
                                 <div class='modal-dialog'>
                                 
                                   <!-- Modal content-->
                                   <div class='modal-content'>
                                     <div class='modal-header bg-warning'>
                                       <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                       <h4 class='modal-title'>Success</h4>
                                     </div>
                                     <div class='modal-body'>
                                       <p>Verification code success</p>
                                     </div>
                                     <div class='modal-footer'>
                                       <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                   </div>
                                   
                                 </div>
                               </div>
                               ");
                            $this->redirect(array('controller'=>'users','action'=>'profile',$this->Auth->user('id')));
                      
                      } else {
                          $this->Session->Setflash('Please try Again');
                          $this->redirect($this->referer());
                        }
                    }else{
                        $this->Session->setFlash('Wrong verification code please try again');
                    }
      }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first',$options));

    }

  public function verifyinfo($id) {
      $user = $this->User->findById($id);
      if($this->request->is('post')){
          $this->set($this->request->data);
          $this->User->set($this->request->data);    
              $this->User->id = $id;
                if($this->request->data['User']['phone_verification'] == $user['User']['phone_verification']){
                  if($this->User->save($this->request->data)){

                       $this->Session->write('verified',"<script src='/js/jquery.js'></script>
                         <script type='text/javascript'>
                                  $(window).load(function(){
                                      $('#myModal').modal('show');
                                  });
                               </script>
                               <div class='modal fade' id='myModal' role='dialog'>
                                 <div class='modal-dialog'>
                                 
                                   <!-- Modal content-->
                                   <div class='modal-content'>
                                     <div class='modal-header bg-warning'>
                                       <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                       <h4 class='modal-title'>Success</h4>
                                     </div>
                                     <div class='modal-body'>
                                       <p>Verification code success</p>
                                     </div>
                                     <div class='modal-footer'>
                                       <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                   </div>
                                   
                                 </div>
                               </div>
                               ");
                            $this->redirect(array('controller'=>'users','action'=>'info',$this->Auth->user('id')));
                      
                      } else {
                          $this->Session->Setflash('Please try Again');
                          $this->redirect($this->referer());
                        }
                    }else{
                        $this->Session->setFlash('Wrong verification code please try again');
                    }
      }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first',$options));

    }

  public function admin_delete($id = NULL){
    $this->User->delete($id);
    $this->Session->setFlash('The User has been Deleted!');
    $this->redirect($this->referer());
  }

	public function admin_profile($id) {

		if($this->request->is('post')){
			$data = $this->User->findById($id);
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);
            if($this->User->validates() ){     
                //get the extenion file
                $ext = end((explode('.',$this->request->data['User']['picture']['name'])));
                $newName = time().'.'.$ext;
        
                //upload directory
                $dir = WWW_ROOT.'/img/'.$newName;
                $filename = $this->request->data['User']['picture']['tmp_name'];
                $this->User->id = $id;
                  if(move_uploaded_file($filename, $dir)){
                    if($this->User->save(array('picture' => $newName))){

                         $this->Session->write('upload',"<script src='/js/jquery.js'></script>
						             <script type='text/javascript'>
                      				    $(window).load(function(){
                      				        $('#myModal').modal('show');
                      				    });
                      				 </script>
                      				 <div class='modal fade' id='myModal' role='dialog'>
                      				   <div class='modal-dialog'>
                      				   
                      				     <!-- Modal content-->
                      				     <div class='modal-content'>
                      				       <div class='modal-header bg-primary'>
                      				         <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      				         <h4 class='modal-title'>Success</h4>
                      				       </div>
                      				       <div class='modal-body'>
                      				         <p>Successfully Changed.</p>
                      				         <p>Some changes will apply after you login again.</p>
                      				       </div>
                      				       <div class='modal-footer'>
                      				         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                      				       </div>
                      				     </div>
                      				     
                      				   </div>
                      				 </div>
                      				 ");
							$this->redirect(array('controller'=>'Posts','action'=>'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                            }
                  } else {
                    $this->Session->Setflash('Please try Again');
                    $this->redirect($this->referer());
                  }
                  $this->request->data = $data;
            }
		}
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->set('user', $this->User->find('first',$options));
	}

  public function member_profile($id) {

    if($this->request->is('post')){
      $data = $this->User->findById($id);
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);
            if($this->User->validates() ){     
                //get the extenion file
                $ext = end((explode('.',$this->request->data['User']['picture']['name'])));
                $newName = time().'.'.$ext;
        
                //upload directory
                $dir = WWW_ROOT.'/img/'.$newName;
                $filename = $this->request->data['User']['picture']['tmp_name'];
                $this->User->id = $id;
                  if(move_uploaded_file($filename, $dir)){
                    if($this->User->save(array('picture' => $newName))){

                         $this->Session->write('upload',"<script src='/js/jquery.js'></script>
                         <script type='text/javascript'>
                                  $(window).load(function(){
                                      $('#myModal').modal('show');
                                  });
                               </script>
                               <div class='modal fade' id='myModal' role='dialog'>
                                 <div class='modal-dialog'>
                                 
                                   <!-- Modal content-->
                                   <div class='modal-content'>
                                     <div class='modal-header bg-primary'>
                                       <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                       <h4 class='modal-title'>Success</h4>
                                     </div>
                                     <div class='modal-body'>
                                       <p>Successfully Changed.</p>
                                       <p>Some changes will apply after you login again.</p>
                                     </div>
                                     <div class='modal-footer'>
                                       <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                   </div>
                                   
                                 </div>
                               </div>
                               ");
              $this->redirect(array('controller'=>'Posts','action'=>'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                            }
                  } else {
                    $this->Session->Setflash('Please try Again');
                    $this->redirect($this->referer());
                  }
                  $this->request->data = $data;
            }
    }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first',$options));
  }

  public function member_user() {
    $this->set('postcount',$this->User->find('count'));
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('User');
    $this->set('users', $data);
  }

  public function admin_user() {
    $this->set('postcount',$this->User->find('count'));
    $this->Paginator->settings = $this->paginate;

    // similar to findAll(), but fetches paged results
    $data = $this->Paginator->paginate('User');
    $this->set('users', $data);
  }

	public function admin_info($id) {
		$data = $this->User->findById($id);
		if($this->request->is('post')){
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);    
                $this->User->id = $id;
                    if($this->User->save($this->request->data)){

                         $this->Session->write('info',"<script src='/js/jquery.js'></script>
						             <script type='text/javascript'>
                      				    $(window).load(function(){
                      				        $('#myModal').modal('show');
                      				    });
                      				 </script>
                      				 <div class='modal fade' id='myModal' role='dialog'>
                      				   <div class='modal-dialog'>
                      				   
                      				     <!-- Modal content-->
                      				     <div class='modal-content'>
                      				       <div class='modal-header bg-primary'>
                      				         <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      				         <h4 class='modal-title'>Success</h4>
                      				       </div>
                      				       <div class='modal-body'>
                      				         <p>Successfully Changed.</p>
                      				       </div>
                      				       <div class='modal-footer'>
                      				         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                      				       </div>
                      				     </div>
                      				     
                      				   </div>
                      				 </div>
                      				 ");
							$this->redirect(array('controller'=>'Posts','action'=>'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                      }
                  $this->request->data = $data;
		}
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->set('user', $this->User->find('first',$options));
	}

  public function member_info($id) {
    $data = $this->User->findById($id);
    if($this->request->is('post')){
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);    
                $this->User->id = $id;
                    if($this->User->save($this->request->data)){

                         $this->Session->write('info',"<script src='/js/jquery.js'></script>
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
                                       <h4 class='modal-title'>Success</h4>
                                     </div>
                                     <div class='modal-body'>
                                       <p>Successfully Changed.</p>
                                     </div>
                                     <div class='modal-footer'>
                                       <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                     </div>
                                   </div>
                                   
                                 </div>
                               </div>
                               ");
              $this->redirect(array('controller'=>'Pages','action'=>'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                      }
                  $this->request->data = $data;
    }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first',$options));
  }

	public function info($id) {
		$data = $this->User->findById($id);
		if($this->request->is('post')){
            // $id = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->User->set($this->request->data);    
                $this->User->id = $id;
                    if($this->User->save($this->request->data)){

                         $this->Session->write('info',"<script src='/js/jquery.js'></script>
						             <script type='text/javascript'>
                      				    $(window).load(function(){
                      				        $('#myModal').modal('show');
                      				    });
                      				 </script>
                      				 <div class='modal fade' id='myModal' role='dialog'>
                      				   <div class='modal-dialog'>
                      				   
                      				     <!-- Modal content-->
                      				     <div class='modal-content'>
                      				       <div class='modal-header bg-primary'>
                      				         <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      				         <h4 class='modal-title'>Success</h4>
                      				       </div>
                      				       <div class='modal-body'>
                      				         <p>Successfully Changed.</p>
                      				         <p>All changes will apply after you login again.</p>
                      				       </div>
                      				       <div class='modal-footer'>
                      				         <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                      				       </div>
                      				     </div>
                      				     
                      				   </div>
                      				 </div>
                      				 ");
							$this->redirect(array('controller'=>'Pages','action'=>'index'));
                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect($this->referer());
                      }
                  $this->request->data = $data;
		}
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->set('user', $this->User->find('first',$options));
	}
		
  public function register(){

    $this->layout = 'loginregister';

    if($this->request->is('post','put')){
      $this->request->data['User']['phone'] =($this->request->data['User']['phone1'] . $this->request->data['User']['phone2']);
      $this->User->create();
      if($this->User->save($this->request->data)){
        if($this->Auth->login()){
              if (!empty($this->request->data['User']['phone'])) {
                $id = uniqid();
                $verify = $this->request->data['User']['phone_verification'];
                $number = $this->request->data['User']['phone'];
                $message = "Welcome to denrcomfiling.org Your pin code is ".$verify.". Enter this code to the site to verify your account..From DENR";
                $clientId = 'c1e4405af0e3c2cb003ab99b4ee45bc76e83b065e03a4c76cc982e170c97cbc5';
                $secretKey = '49f09da3a4d008dccac22635e523330d186b8443773fff8b5297d9106e87969d';
                $shortCode = '2929030850';
                  $chikkaAPI = new ChikkaSMS($clientId,$secretKey,$shortCode);
                  $response = $chikkaAPI->sendText($id, $number, $message);

              header("HTTP/1.1 " . $response->status . " " . $response->message);
              // exit($response->description);
                $this->Session->setFlash('We sent you a verification code type it here.');
                $this->redirect($this->Auth->redirect(array('controller'=>'users', 'action'=>'verify',$this->Auth->user('id'))));

                $this->redirect($this->referer());
              }else{
                $this->Session->setFlash('Your mobile number is not valid');
              }
                  $this->redirect($this->Auth->redirect(array('controller'=>'users', 'action'=>'profile',$this->Auth->user('id'))));
        }
               

      }else{
        $this->Session->setFlash('Please correct the wrong input below nuber must not be verified yet.');
      }
    }
  }





 public function forgetpw(){
		$this->layout = 'loginregister';
		$this->User->recursive=-1; 

		if($this->request->is('post')) {

			//for sending key on email
			$email=$this->request->data['User']['email'];

		 	$emailfind=$this->User->find('first',array('conditions'=>array('User.email'=>$email)));
		  
      #pr($email);

      #pr($emailfind);
        if( !empty($emailfind) ) {
		      @$message = $_SERVER['HTTP_HOST'].'/users/key/'.$this->request->data['_Token']['key'].'/'.$emailfind['User']['id'];
			    $Email = new CakeEmail('default');
			    $Email->template('forgot');
			    $Email->viewVars($message);
			    $Email->emailFormat('html');
			    $Email->to($this->request->data['User']['email']);
			    $Email->subject('About');
			    
			    if( $Email->send() ) {
			    	@$data = array('id'=>$emailfind['User']['id'],'key'=>$this->request->data['_Token']['key']);
			    	$this->User->save($data);
			    	$this->Session->setFlash('Reset Password Was Send to your Email..','fgood');
				$this->redirect('/pages/index');
          }
		    } else {
		    	$this->Session->setFlash('Email cannot be Found...','fbad');
		    	
		    }

	    }

	}

	public function key($token = null , $id = null){
		$key = $this->User->findById($id);
		if($key['User']['key'] != $token){
			$this->redirect('/users/forgetpw');
		}

		if( $this->request->is('post') ){
			$this->User->set($this->request->data);
			if ($this->User->validates()){
				$this->request->data['User']['id'] = $id;
				if($this->User->save($this->request->data)) {
					$this->Session->setFlash('Password Successfully Updated','fgood');
					$data = array('id'=>$id,'key'=>'');
			    	$this->User->save($data);
			    	$this->redirect('/pages/index');
				}
			}	
		}
	}

    public function member_login(){
    	$this->redirect('/users/login');
    }

    public function member_logout(){
    	$this->Auth->logout();
    	$this->redirect('/users/login');
    }

    public function admin_login(){
    	$this->redirect('/users/login');
    }

      public function admin_logout(){
    	$this->Auth->logout();
    	$this->redirect('/users/login');
    }
}
