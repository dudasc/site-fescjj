<?php

class Newsletter extends AppModel {

	public $name = 'Newsletter';
	
   public $validate = array(
		'email' => array(
        'rule' => 'isUnique',
		'message' => 'Este e-mail já está cadastrado',
		
        'required' => 'create'
    ));
}