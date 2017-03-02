<?php

App::uses('AppController', 'Controller');

class denrofficialsController extends AppController {

	public $components = array('Paginator', 'Session');

	public function login(){
		$this->layout = 'loginregister';
		if($this->request->is('post')){
			if ($this->Auth->login()) {
		    	if($this->Auth->user('role') == 'admin') {
		    		$this->Layout = 'admin';
			        $this->redirect(array(
			            'controller'=>'denrofficials',
			            'action'=>'admin_index',
			            'prefix'=>'admin',
			            'admin'=>true
			        ));
		    	} else {
		    		return $this->redirect($this->Auth->redirect());
		    	}
			}
		}
	}

	public function logout(){
		$this->redirect($this->Auth->logout());
	}

	public function admin_logout(){
		$this->redirect($this->Auth->logout());
	}
	
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

	public function admin_index() {
		$this->loadModel('Post');
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
	}

	public function add_member(){
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('New Member has been save.'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been edit.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}