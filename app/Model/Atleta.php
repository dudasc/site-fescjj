<?php
class Atleta extends AppModel{
	public $uses = 'Atleta';  

public $order = array('nome' => 'ASC');
	
	public $validate = array(
		'id',
		'nome' => 
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
					'message' => 'CPF já cadastrado'
				)
			),		
		'data_nasc'=> 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Campo obrigatório'
				)
			),	
		'email' => 
			array (				
				'required' => array(
					'rule' => array ('isunique'),
					'message' => 'E-mail já cadastrado'
				)
			),	
		'cidade' => 
			array('required' => 
				array(
					'rule' => array('notEmpty'),
					'message' => 'Informe sua cidade'
				)
			),		
		'academia',
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
		'peso', 				
		'foto'
    );
	
	
	
	
	
	
	
	
	
	
	
	
	var $actsAs = array(
        'Upload' => array( 
         // Enviar uma imagem // 
           'foto' => array( //Nome do campo na base de dados.
               'dir' => 'img/uploads/atletas/',  //DiretÃ³rio para envio, apartir do webroot
               //'default' => 'sem_img.jpg',  //Arquivo a ser exibido o campo esteja em branco na base.
                'allowedMime' => array('image/jpeg', 'image/pjpeg'), //Mimetype permitidos (NÃ£o setar se nÃ£o querer validar)

                'allowedExt' => array('jpg', 'jpeg'),//ExtenÃ§Ãµes permitidas (NÃ£o setar se nÃ£o querer validar)
                'sizes' => array(//Se for uma imagem vocÃª pode setar o nome e os metodos e valores a serem aplicados na imagem da lib phpThumb
                    'small' => array(//vai gerar small_nomeDoArquivoEnviado.ext
                        //Aplica o metodo adaptiveResize passando os parametros 200 e 100 da classe phpThumb
						 //'cropFromCenter' => 2000,
						 //'resize' => array(120, 150),
						 'adaptiveResize' => array(130, 160)
                    ),
					'normal' => array('resize' => array(600,600))
                )
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