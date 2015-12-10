<?php

class Video extends AppModel {

	public $name = 'Video';	

	
   public $validate = array(
        'dt_cadastro' => array(
            'rule' => 'notEmpty',
            'message' => 'Campo de preenchimento obrigatório'
        ),
        'descricao' => array(
                'rule' => 'notEmpty',
                'message' => 'Campo de preenchimento obrigatório'
        ),      
        'cod_frame' => array(
            'rule' => 'notEmpty',
            'message' => 'Campo de preenchimento obrigatório'
        )
    );

}