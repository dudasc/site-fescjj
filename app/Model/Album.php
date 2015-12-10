<?php
class Album extends AppModel{
	
	public $useTable = 'albuns';
	public $name = 'Album';	
	
	
	public $hasMany = array(
      'Foto' => array(
        'className' => 'Foto',
         'foreignKey' => 'albuns_id',
         'fields' => array('id', 'nome', 'albuns_id'),
         'conditions' => array(),
         'order' => array('id' => 'DESC'),
         'dependent' => true
      )
   );

	
	
	
	
	public $validate = array(
		
        'descricao' => array(
            'notempty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Campo descricao obrigatório.'
            )
        ),
		
			'dt_cadastro',
			'id'
    );
}
?>