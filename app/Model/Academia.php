<?php
class Academia extends AppModel {    
    public $name = 'Academia';  
	
	public $validate = array(
		'nome' => array(
					'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Campo nome obrigatório')
				),

		'telefone',    	
        'endereco',
		'cidade',
		'foto',
		'id',
    );
	
	var $actsAs = array(
        'Upload' => array( 
         // Enviar uma imagem // 
           'foto' => array( //Nome do campo na base de dados.
               'dir' => 'img/uploads/academias/',  //DiretÃ³rio para envio, apartir do webroot
               //'default' => 'sem_img.jpg',  //Arquivo a ser exibido o campo esteja em branco na base.
                'allowedMime' => array('image/jpeg', 'image/pjpeg'), //Mimetype permitidos (NÃ£o setar se nÃ£o querer validar)

                'allowedExt' => array('jpg', 'jpeg'),//ExtenÃ§Ãµes permitidas (NÃ£o setar se nÃ£o querer validar)
                'sizes' => array(//Se for uma imagem vocÃª pode setar o nome e os metodos e valores a serem aplicados na imagem da lib phpThumb
                    'small' => array(//vai gerar small_nomeDoArquivoEnviado.ext
                        //Aplica o metodo adaptiveResize passando os parametros 200 e 100 da classe phpThumb
						 'cropFromCenter' => 2000,
						 ///'resize' => array(200,140)
						 'adaptiveResize' => array(200, 150)
                    ),
					'normal' => array('resize' => array(800,800))
                )
            )
        )
    );
}
?>