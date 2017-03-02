<?php

App::uses('AppModel','Model');

class Profile extends AppModel {

  
  public $belongsTo = array(
                        'User'=>array(
                                  'className'=>'User',
                                  'foreignKey'=>'user_id'
                             )
                );

  public $validate = array(
        'image' => array(
                 'rule' => array('extension',array('gif', 'jpeg', 'png', 'jpg')),
                  'message' => 'Please supply a valid image.'
        )
  );
}