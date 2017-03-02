<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {

	public $components = array('Paginator', 'Session');

  public $paginate = array(
        'limit' => 5,
        'order' => array(
            'Post.created' => 'desc'
        )
  );

	public $uses = array('Post',
                         'Complaint',
                         'Comment',
                         'denrofficial',
                         'Post',
                         'User',
                         'Landagri',
                         'Landin',
                         'Landmi',
                         'Landre',
                         'Landcon',
                         'Forestchain',
                         'Forestwood',
                         'Forestlumb',
                         'Forestdealer',
                         'Forestcert',
                         'Forestsup',
                         'Forestplant',
                         'Wildlifefarm',
                         'Wildlifelocal',
			                   'Wildlifeexport',
                         'Wildlifeimport',
                         'Wildlifereexport',
                         'Wildlifespecial',
			                   'News',
                         'Facts',
                         'Announcements'
    );

	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

    public function forum() {
        if($this->request->is('post')){
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            $this->set($this->request->data);
            $this->Post->set($this->request->data);
            if($this->Post->validates() ){     

                move_uploaded_file($this->request->data['Post']['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/files/' . $this->request->data['Post']['image']['name']);

                    if($this->Post->save(array('image' => $this->request->data['Post']['image']['name']))){

                        $this->Session->Setflash('Successfully Uploaded');
                        $this->redirect('forum');

                    } else {
                        $this->Session->Setflash('Please try Again');
                        $this->redirect('forum');
                    }
            }
        }

        $this->set('posts',$this->Post->find('all',array('order'=>array('Post.created ASC'))));

        $this->set('postcount',$this->Post->find('count'));
        
        $result = $this->Post->find('all',array('limit' => 5 ,'order'=>array('Post.comment_count DESC')));
        $this->set('comment',$result);

        $this->set('comments',$this->Post->find('all', array('limit' => 5 , 'order'=>array('Post.created DESC'))));

    }
    
    public function view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));

        $result = $this->Post->find('all',array('order'=>array('Post.created ASC')));
        $this->set('comment',$result);

        $this->set('comments',$this->Post->find('all', array('limit' => 5 , 'order'=>array('Post.created DESC'))));

        /* Adding comments */
        if ($this->request->is('post')) {
            $this->Comment->create();
            if (!empty($this->request->data)){
                $this->request->data['Comment']['post_id'] = $id;
                if ($this->Comment->save($this->request->data)) {
                    $this->redirect($this->here);
                } else {
                    $this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
                }
            }
        }
          $posts = $this->Comment->find('all',array('conditions' => array('Post.' . $this->Post->primaryKey => $id)));
          $this->set('postss',$posts);
    }
    
	public function complaint() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
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

    public function admin_delete($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The Post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The Post could not be deleted. Please, try again.'));
        }
        return $this->redirect($this->referer());
    }

    public function admin_delete1($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The Post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The Post could not be deleted. Please, try again.'));
        }
        return $this->redirect('forum');
    }

    public function admin_delete2($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The Post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The Post could not be deleted. Please, try again.'));
        }
        return $this->redirect('forum');
    }

    public function member_delete2($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The Post has been deleted.'));
        } else {
            $this->Session->setFlash(__('The Post could not be deleted. Please, try again.'));
        }
        return $this->redirect('forum');
    }

	public function member_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

		#$this->layout= false;

        if($this->request->is('post')){
            

            if (!empty($this->request->data['News'])) {
                #pr($this->request->data['News']);
                
                $this->News->set($this->request->data['News']);
                if( $this->News->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['News']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'/news/'.$newName;
                       $filename = $this->request->data['News']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['News']['image'] = $newName;

                         if( $this->News->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Member Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding News and Events Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/member/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }

            }

            if (!empty($this->request->data['Facts'])) {
                #pr($this->request->data['Facts']);

                $this->Facts->set($this->request->data['Facts']);
                if( $this->Facts->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['Facts']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'/facts/'.$newName;
                       $filename = $this->request->data['Facts']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['Facts']['image'] = $newName;

                         if( $this->Facts->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Member Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding Facts and Trivia Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/member/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }
            }


            if (!empty($this->request->data['Announcements'])) {
                #pr($this->request->data['Announcements']);

                $this->Announcements->set($this->request->data['Announcements']);
                if( $this->Announcements->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['Announcements']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'/announcements/'.$newName;
                       $filename = $this->request->data['Announcements']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['Announcements']['image'] = $newName;

                         if( $this->Announcements->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Member Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding Announcement Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/member/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }
            }
	}
}


    public function member_forum() {
        $this->set('postcount',$this->Post->find('count'));
            $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
    }

    public function member_view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
        $options2 = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('post2', $this->User->find('first', $options2));

        /* Adding related Posts */
        if ($this->request->is('post')) {
            $this->Comment->create();
            if(!empty($this->request->data)){
               $this->request->data['Comment']['post_id'] = $id;
               $this->request->data['Comment']['user_id'] = $this->Auth->user('id');

            if ($this->Comment->save($this->request->data)) {
                 $this->redirect($this->here);
            } else {
                $this->Session->setFlash(__('The Post could not be saved. Please, try again.'));
            }
        }
        }
        $posts = $this->Comment->find('all',array('conditions' => array('Post.' . $this->Post->primaryKey => $id)));
        $this->set('postss',$posts);
    }

    public function member_edit($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
    }

    public function member_delete($id = null) {
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
        return $this->redirect($this->referer());
    }


    public function member_application() {

    }

    public function admin_application() {

    }

    //LAND member application forms
    public function admin_landAgri() {

     }

     public function member_landAgri() {

     }
     
     public function admin_landInsular() {

     }
     public function member_landInsular() {

     }

     public function admin_landMis() {

     }
     public function member_landMis() {

     }
     
     public function admin_landRes() {

     }
     public function member_landRes() {

     }

     public function admin_landCons() {

     }
     public function member_landCons() {

     }

     //FOREST admin and member application forms
     public function admin_forestChains() {

     }
     public function member_forestChains() {

     }

     public function admin_forestWoods() {

     }
     public function member_forestWoods() {

     }

     public function admin_forestLumbs() {

     }
     public function member_forestLumbs() {

     }

     public function admin_forestDealers() {

     }
     public function member_forestDealers() {

     }

     public function admin_forestCerts() {

     }
     public function member_forestCerts() {

     }

     public function admin_forestSups() {

     }
     public function member_forestSups() {

     }

     public function admin_forestPlants() {

     }
     public function member_forestPlants() {

     }


     //WILDLIFE admin and member application forms
     public function admin_wildlifeFarms() {
        
     }
     public function member_wildlifeFarms() {
        
     }

     public function admin_wildlifeLocals() {

     }

     public function member_wildlifeLocals() {

     }

      public function admin_wildlifeExports() {

     }

     public function member_wildlifeExports() {

     }

     public function admin_wildlifeImports() {

     }

     public function member_wildlifeImports() {

     }

     public function admin_wildlifeReexports() {

     }

     public function member_wildlifeReexports() {

     }

     public function admin_wildlifeSpecials() {

     }

     public function member_wildlifeSpecials() {

     }



     //admin and member AJAX Calls for Land
     public function admin_landagriculture($pin = null){
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Landagri.name LIKE' => '%'.$pin.'%'),
                                                         array('Landagri.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Landagri->find('all', $condition);
            $this->set('result',$result);
        }
     }

     public function member_landagriculture($pin = null){
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Landagri.name LIKE' => '%'.$pin.'%'),
     											         array('Landagri.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Landagri->find('all', $condition);
     		$this->set('result',$result);
     	}
     }

     public function admin_landinsularajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Landin.name LIKE' => '%'.$pin.'%'),
                                                         array('Landin.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Landin->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_landinsularajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Landin.name LIKE' => '%'.$pin.'%'),
     											         array('Landin.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Landin->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_landmiscellajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Landmi.name LIKE' => '%'.$pin.'%'),
                                                         array('Landmi.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Landmi->find('all', $condition);
            $this->set('result',$result);
        }

     }
      public function member_landmiscellajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Landmi.name LIKE' => '%'.$pin.'%'),
     											         array('Landmi.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Landmi->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_landresidentajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Landre.name LIKE' => '%'.$pin.'%'),
                                                         array('Landre.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Landre->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_landresidentajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Landre.name LIKE' => '%'.$pin.'%'),
     											         array('Landre.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Landre->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_landcondiajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Landcon.name LIKE' => '%'.$pin.'%'),
                                                         array('Landcon.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Landcon->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_landcondiajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Landcon.name LIKE' => '%'.$pin.'%'),
     											         array('Landcon.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Landcon->find('all', $condition);
     		$this->set('result',$result);
     	}

     }


     //admin and member AJAX Calls for Forest
     public function admin_forestchainajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestchain.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestchain.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestchain->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestchainajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestchain.name LIKE' => '%'.$pin.'%'),
     											         array('Forestchain.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestchain->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestwoodajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestwood.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestwood.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestwood->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestwoodajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestwood.name LIKE' => '%'.$pin.'%'),
     											         array('Forestwood.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestwood->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestlumbajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestlumb.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestlumb.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestlumb->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestlumbajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestlumb.name LIKE' => '%'.$pin.'%'),
     											         array('Forestlumb.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestlumb->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestdealerajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestdealer.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestdealer.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestdealer->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestdealerajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestdealer.name LIKE' => '%'.$pin.'%'),
     											         array('Forestdealer.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestdealer->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestcertajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestcert.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestcert.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestcert->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestcertajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestcert.name LIKE' => '%'.$pin.'%'),
     											         array('Forestcert.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestcert->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestsupajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestsup.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestsup.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestsup->find('all', $condition);
            $this->set('result',$result);
          }
    }

public function member_forestsupajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestsup.name LIKE' => '%'.$pin.'%'),
     											         array('Forestsup.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestsup->find('all', $condition);
     		$this->set('result',$result);
     	}

     }

     public function admin_forestplantajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Forestplant.name LIKE' => '%'.$pin.'%'),
                                                         array('Forestplant.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Forestplant->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_forestplantajax($pin = NULL) {
     	$this->layout = false;

     	if(isset($pin) != NULL) {
     		$condition = array('conditions'=>
     										array('OR'=>array(
     											         array('Forestplant.name LIKE' => '%'.$pin.'%'),
     											         array('Forestplant.pin LIKE' => '%'.$pin.'%')
     											        )
     										)
     						   );
     		$result = $this->Forestplant->find('all', $condition);
     		$this->set('result',$result);
     	}

     }


     //admin and member AJAX Calls for Wildlife
     public function admin_wildlifefarmajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifefarm.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifefarm.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifefarm->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifefarmajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifefarm.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifefarm.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifefarm->find('all', $condition);
            $this->set('result',$result);
        }

     }

     public function admin_wildlifelocalajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifelocal.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifelocal.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifelocal->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifelocalajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifelocal.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifelocal.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifelocal->find('all', $condition);
            $this->set('result',$result);
        }

     }

     public function admin_wildlifeexportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifeexport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifeexport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifeexport->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifeexportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifeexport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifeexport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifeexport->find('all', $condition);
            $this->set('result',$result);
        }

     }

      public function admin_wildlifeimportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifeimport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifeimport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifeimport->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifeimportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifeimport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifeimport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifeimport->find('all', $condition);
            $this->set('result',$result);
        }

     }

      public function admin_wildlifereexportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifereexport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifereexport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifereexport->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifereexportajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifereexport.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifereexport.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifereexport->find('all', $condition);
            $this->set('result',$result);
        }

     }

      public function admin_wildlifespecialajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifespecial.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifespecial.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifespecial->find('all', $condition);
            $this->set('result',$result);
        }

     }
     public function member_wildlifespecialajax($pin = NULL) {
        $this->layout = false;

        if(isset($pin) != NULL) {
            $condition = array('conditions'=>
                                            array('OR'=>array(
                                                         array('Wildlifespecial.name LIKE' => '%'.$pin.'%'),
                                                         array('Wildlifespecial.pin LIKE' => '%'.$pin.'%')
                                                        )
                                            )
                               );
            $result = $this->Wildlifespecial->find('all', $condition);
            $this->set('result',$result);
        }

     }




     //admin and member pdf printing for land
     public function admin_landagripdf($id = null){
            $this->layout='pdfTemp';
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Landagri->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_landagripdf($id = null){
            $this->layout='pdfTemp';
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Landagri->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

    public function admin_landinspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Landin->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
    public function member_landinspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Landin->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_landmispdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Landmi->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_landmispdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Landmi->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_landrespdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Landre->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_landrespdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Landre->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_landconspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Landcon->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_landconspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Landcon->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     //admin and member pdf printing for forest
     public function admin_forestchainspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestchain->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestchainspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestchain->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestwoodspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestwood->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestwoodspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestwood->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestlumbspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestlumb->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestlumbspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestlumb->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestdealerspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestdealer->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestdealerspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestdealer->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestcertspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestcert->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestcertspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestcert->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestsupspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestsup->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestsupspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestsup->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }

     public function admin_forestplantspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Forestplant->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_forestplantspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
            	$result = $this->Forestplant->findById($id);
            	$this->set('result',$result);
            } else {
            	$result = null;
            	$this->set('result',$result);
            }
     }




     //admin and member pdf printing for Wildlife
     public function admin_wildlifefarmspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifefarm->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_wildlifefarmspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifefarm->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

      public function admin_wildlifelocalspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifelocal->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
      public function member_wildlifelocalspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifelocal->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     public function admin_wildlifeexportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifeexport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     public function member_wildlifeexportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifeexport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     public function admin_wildlifeimportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifeimport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_wildlifeimportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifeimport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     public function admin_wildlifereexportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifereexport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_wildlifereexportspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifereexport->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     public function admin_wildlifespecialspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifespecial->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }
     public function member_wildlifespecialspdf($id = null){
            $this->layout='pdfTemp';
            
            error_reporting(0);
            App::import('Vendor', 'MPDF', array('file' => 'MPDF'.DS.'mpdf.php'));

            if(isset($id) != null){
                $result = $this->Wildlifespecial->findById($id);
                $this->set('result',$result);
            } else {
                $result = null;
                $this->set('result',$result);
            }
     }

     //statistics
     public function member_stats(){
        
        $this->set('default',$this->Complaint->byYear(date('Y')));

     }

     public function member_year($year){
        $this->layout = false;
        $this->set('default',$this->Complaint->byYear($year));
     }


     public function member_month($year,$from,$till){
        $this->layout = false;
        $this->set('default',$this->Complaint->byMonth($year,$from,$till));
     }


     


    public function admin_forum() {
        $this->set('postcount',$this->Post->find('count'));
            $this->Paginator->settings = $this->paginate;

        // similar to findAll(), but fetches paged results
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
    }

	 public function admin_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());

        #$this->layout= false;

        if($this->request->is('post')){
            

            if (!empty($this->request->data['News'])) {
                #pr($this->request->data['News']);
                
                $this->News->set($this->request->data['News']);
                if( $this->News->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['News']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'/news/'.$newName;
                       $filename = $this->request->data['News']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['News']['image'] = $newName;

                         if( $this->News->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Admin Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding News and Events Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/admin/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }

            }

            if (!empty($this->request->data['Facts'])) {
                #pr($this->request->data['Facts']);

                $this->Facts->set($this->request->data['Facts']);
                if( $this->Facts->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['Facts']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'facts/'.$newName;
                       $filename = $this->request->data['Facts']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['Facts']['image'] = $newName;

                         if( $this->Facts->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Admin Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding Facts and Trivia Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/admin/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }
            }


            if (!empty($this->request->data['Announcements'])) {
                #pr($this->request->data['Announcements']);

                $this->Announcements->set($this->request->data['Announcements']);
                if( $this->Announcements->validates() ){   
                        //get the extenion file
                       $ext = end((explode('.',$this->request->data['Announcements']['image']['name'])));
                       $newName = time().'.'.$ext;
        
                       //upload directory
                       $dir = WWW_ROOT.'announcements/'.$newName;
                       $filename = $this->request->data['Announcements']['image']['tmp_name'];
                
                       if(move_uploaded_file($filename, $dir)){

                         $this->request->data['Announcements']['image'] = $newName;

                         if( $this->Announcements->save($this->request->data) ){

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
                                                                <h4 class='modal-title'>Attention Admin Personnel</h4>
                                                              </div>
                                                              <div class='modal-body'>
                                                                <p>Adding Announcement Successfully Submitted</p>
                                                              </div>
                                                              <div class='modal-footer'>
                                                                <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                              </div>
                                                            </div>
                                                            
                                                          </div>
                                                        </div>
                                                     ");
                             $this->redirect('/admin/posts');
                          } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                          }
                        } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                        }
                }
            }

            /*
            $this->News->set($this->request->data);
            if( $this->News->validates() ){   
                //get the extenion file
                $ext = end((explode('.',$this->request->data['News']['image']['name'])));
                $newName = time().'.'.$ext;
        
                //upload directory
                $dir = WWW_ROOT.'/news/'.$newName;
                $filename = $this->request->data['News']['image']['tmp_name'];
                
                  if(move_uploaded_file($filename, $dir)){

                    $this->request->data['News']['image'] = $newName;

                    if( $this->News->save($this->request->data) ){

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
                    

                         $this->redirect('/admin/posts');


                    } else {
                             $this->Session->Setflash('Please try Again');
                             $this->redirect($this->request->here);
                           }
                  } else {
                           $this->Session->Setflash('Please try Again');
                           $this->redirect($this->request->here);
                         }
            }
            */

        }
	}


 public function admin_factslist() {
      $this->set('facts',$this->Facts->find('all'));
  }

  public function admin_factsView($id){
      $this->set('result',$this->Facts->findById($id));
  }

  public function admin_factDelete($id = null) {
      $img = $this->Facts->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/app/webroot/facts/'.$img['Facts']['image']);
      $this->Facts->delete($id);
      $this->redirect('/admin/posts/factslist');
  }

  public function admin_announcementlist() {
      $this->set('announcements',$this->Announcements->find('all'));
  }

  public function admin_announcementView($id) {
      $this->set('announcements',$this->Announcements->findById($id));
  }

  public function admin_announcementDelete($id = null) {
      $img = $this->Announcements->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/announcements/'.$img['Announcements']['image']);
      $this->Announcements->delete($id);
      $this->redirect('/admin/posts/announcementlist');
  }

  public function admin_newslist() {
      $this->set('news',$this->News->find('all'));
  }

  public function admin_newsView($id){
    $this->set('news',$this->News->findById($id));
  }

  public function admin_newsDelete($id = null) {
      $img = $this->News->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/news/'.$img['News']['image']);
      $this->News->delete($id);
      $this->redirect('/admin/posts/newslist');
  }

  public function member_factslist() {
      $this->set('facts',$this->Facts->find('all'));
  }

  public function member_factsView($id){
      $this->set('result',$this->Facts->findById($id));
  }

  public function member_factDelete($id = null) {
      $img = $this->Facts->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/app/webroot/facts/'.$img['Facts']['image']);
      $this->Facts->delete($id);
      $this->redirect('/member/posts/factslist');
  }

  public function member_announcementlist() {
      $this->set('announcements',$this->Announcements->find('all'));
  }

public function member_announcementView($id) {
      $this->set('announcements',$this->Announcements->findById($id));
  }

  public function member_announcementDelete($id = null) {
      $img = $this->Announcements->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/announcements/'.$img['Announcements']['image']);
      $this->Announcements->delete($id);
      $this->redirect('/member/posts/announcementlist');
  }

  public function member_newslist() {
      $this->set('news',$this->News->find('all'));
  }

  public function member_newsView($id){
    $this->set('news',$this->News->findById($id));
  }

  public function member_newsDelete($id = null) {
      $img = $this->News->findById($id);
      unlink($_SERVER['DOCUMENT_ROOT'].'/news/'.$img['News']['image']);
      $this->News->delete($id);
      $this->redirect('/member/posts/newslist');
  }


	public function admin_complaint() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
        $options2 = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('post2', $this->User->find('first', $options2));

        /* Adding related comments */
        if ($this->request->is('post')) {
            $this->Comment->create();
            if(!empty($this->request->data)){
               $this->request->data['Comment']['post_id'] = $id;
               $this->request->data['Comment']['user_id'] = $this->Auth->user('id');

            if ($this->Comment->save($this->request->data)) {
                 $this->redirect($this->here);
            } else {
                $this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
            }
        }
        }
         $posts = $this->Comment->find('all',array('conditions' => array('Post.' . $this->Post->primaryKey => $id)));
         $this->set('postss',$posts);
    }





  public function admin_add() {
    if ($this->request->is('post')) {
            $this->Post->create();
             $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'forum'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        }
  }

  public function member_add() {
        if ($this->request->is('post')) {
            $this->Post->create();
             $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->saveAll($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'forum'));
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
                $this->Session->setFlash(__('The post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
    }

    public function admin_stats(){
        $this->set('default',$this->Complaint->byYear(date('Y')));
    }

    //AJAX admin statistic 
    public function admin_year($year){
        $this->layout = false;
        $this->set('default',$this->Complaint->byYear($year));
    }


     public function admin_month($year,$from,$till){
        $this->layout = false;
        $this->set('default',$this->Complaint->byMonth($year,$from,$till));
    }
	
}

