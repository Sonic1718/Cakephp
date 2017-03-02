<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

	public $helpers = array('Js','Text');


	public $components = array(
		'Session',
		'RequestHandler',
		'Auth' => array(
			'loginRedirect'=>array('controller'=>'users','action'=>'login'),
			'logoutRedirect'=>array('controller'=>'users','action'=>'login'),
			'authError'=>"You can't access that page",
			'authorize'=>array('Controller'),
			)
		);

	public function isAuthorized($User) {
        
        //Admin routing prefix
		if (!empty($this->params['prefix']) && $this->params['prefix'] == 'admin') {
	        
	        if ($User['role'] == 'admin') {
	        	$this->layout = 'admin';
	            return true;
        	
        	}

        	return false;
        }
        //Member routing prefix
		if (!empty($this->params['prefix']) && $this->params['prefix'] == 'member') {
	        
	        if ($User['role'] == 'member') {
	        	$this->layout = 'member';
	            return true;
        	}

        	return false;
        }

        
        
         
   	return true;
	}
	
	public function beforeFilter() {
		$this->loadModel('User');
		$id = $user = $this->Auth->user();
		$this->Auth->allow('index','contact','faqs','fact','announcement','news','land','forest','wildlife','register','forgetpw','key','logout');
		$this->set('logged_in',$this->Auth->loggedIn());
		$this->set('current_user',$this->User->findById($id['id']));
		


		if($user['role'] == 'member' && empty($this->params['prefix'])){
        	$this->redirect('/member/posts');
                }

                if($user['role'] == 'admin' && empty($this->params['prefix'])){
        	$this->redirect('/admin/posts');
                }
        
	}

}
