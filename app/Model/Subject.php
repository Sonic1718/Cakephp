<?php
App::uses('AppModel','Model');

class Subject extends AppModel {

	public $hasMany = array('Complaint');

}
