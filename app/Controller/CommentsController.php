<?php
App::uses('AppController', 'Controller');

class CommentsController extends AppController {

	public $components = array('Paginator', 'Session');

	public function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
		$this->set('comment', $this->Comment->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		}
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('posts'));
	}

	public function edit($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
			$this->request->data = $this->Comment->find('first', $options);
		}
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('posts'));
	}

	public function delete($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('The comment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}





		// member 
	    public function member_add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
	}

	public function member_edit($id = null) {
		
		 if (!$this->Comment->exists($id)) {
		 	throw new NotFoundException(__('Invalid post'));
		 }

		 if ($this->request->is(array('post', 'put'))) {
		 	 $this->Comment->id = $id;
		 	if ($this->Comment->save($this->request->data)) {
		 		$this->Session->setFlash(__('The post has been saved.'));
			    $this->redirect('/member/Posts/view/1');
		 	} else {
		 		$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
		 	}
		 }

		 $this->set('data',$this->Comment->findById($id));
	}

	public function member_view($id = null) {
		$this->loadModel('User');
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Comment->primaryKey => $id));
		$this->set('post', $this->Comment->find('first', $options));
		$options2 = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('post2', $this->User->find('first', $options2));
	}

	public function member_delete($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->here);
	}






















	public function admin_index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
		$this->set('comment', $this->Comment->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved.'));
				return $this->redirect(array('action' => 'forum'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		}
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('posts'));
	}

    public function admin_edit($id = null) {
		if (!$this->Comment->exists($id)) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->Comment->id = $id;
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved.'));
			    $this->redirect('/admin/posts/view/1');
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comment.' . $this->Comment->primaryKey => $id));
			$this->request->data = $this->Comment->find('first', $options);
		}
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('posts'));
	}

	public function admin_delete($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('The comment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The comment could not be deleted. Please, try again.'));
		}
		return $this->redirect($this->referer());
	}
}
