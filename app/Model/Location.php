<?php

App::uses('AppModel', 'Model');

class Location extends AppModel {
  
  public $hasMany = array('Complaint');

}
