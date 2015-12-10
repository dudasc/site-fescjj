<?php
class Inscricao extends AppModel{
	
	public $useTable = 'inscricoes';  
	
	
	
		public function beforeSave($options = array()) {
		  
                $data = explode('/', $this->data['Inscricao']['data_nasc']);
                $data = $data[2].'-'.$data[1].'-'.$data[0];
                $this->data['Inscricao']['data_nasc'] = $data;
          
           
	}  
	
	public $validate = array(
		'id',
		'nome' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Campo obrigatório'
				)
			),	
		'sexo' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Campo obrigatório'
				)
			),						
		'cpf' => 			
			array (
				'numeric' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Insira somente números'
				),
				'required' => array(
					'rule' => array ('between',11, 11 ),
					'message' => "O CPF deve conter 11 números"
				),
				'isUnique' => array(
					'rule' => 'isUnique',
					'message' => 'CPF já cadastrado'
				)
			),		
		'rg' => 
			array (
				'numeric' => array(
					'rule'     => 'numeric',
					'required' => true,
					'message'  => 'Insira somente números'
				),
				'required' => array(
					'rule' => array ('maxLength', 10 ),
					'message' => "O RG deve conter no máximo 10 números"
				),
				'isUnique' => array(
					'rule' => 'isUnique',
					'message' => 'RG já cadastrado'
				)
			),		
		'data_nasc'=> 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Campo obrigatório'
				),
				'born' => array(
					'rule' => array('date', 'dmy'),
					'message' => 'Insira uma data válida',
					'allowEmpty' => false
				)
			),	
			
		'email' => 
			array(
				'rule' => array('notEmpty'),
				'message' => 'Campo obrigatório'
			),	
		'cidade' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Informe sua cidade'
				)
			),		
		'equipe',
		'professor',
		'categoria' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Selecione uma categoria'
				)
			),	
		'faixa' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Selecione um faixa'
				)
			),	
			'absoluto',
			'status',
		'peso', 				
		'comprovante'
    );
	
	
	var $actsAs = array(
        'Upload' => array( 
         // Enviar uma imagem // 
           'comprovante' => array( //Nome do campo na base de dados.
               'dir' => 'img/uploads/comprovantes/',  //DiretÃ³rio para envio, apartir do webroot
               //'default' => 'sem_img.jpg',  //Arquivo a ser exibido o campo esteja em branco na base.
                'allowedMime' => array('image/jpeg', 'image/pjpeg'), //Mimetype permitidos (NÃ£o setar se nÃ£o querer validar)

                'allowedExt' => array('jpg', 'jpeg'),//ExtenÃ§Ãµes permitidas (NÃ£o setar se nÃ£o querer validar)
               
            )
        )
    );
	
	public function alphaNumericDashUnderscore($check) {
		$value = array_values($check);
		$value = $value[0];	
		return preg_match('|^[0-9a-zA-Z_-]*$|', $value);
	}
	
}
?>