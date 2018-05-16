<?php
class Noticia extends AppModel {    
    public $name = 'Noticia';  
	
	public $validate = array(
		'titulo' => array(
					'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Campo título obrigatório')
				),    	
        'descricao' => array(
            'notempty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Campo descricao obrigatório.'
            )
        ),
			'imagem',
			'data',
			'id'
    );
	
	var $actsAs = array(
        'Upload' => array( 
         // Enviar uma imagem // 
           'imagem' => array( //Nome do campo na base de dados.
               'dir' => 'img/uploads/noticias/',  //DiretÃ³rio para envio, apartir do webroot
               //'default' => 'sem_img.jpg',  //Arquivo a ser exibido o campo esteja em branco na base.
                'allowedMime' => array('image/jpeg', 'image/pjpeg'), //Mimetype permitidos (NÃ£o setar se nÃ£o querer validar)

                'allowedExt' => array('jpg', 'jpeg'),//ExtenÃ§Ãµes permitidas (NÃ£o setar se nÃ£o querer validar)
                'sizes' => array(//Se for uma imagem vocÃª pode setar o nome e os metodos e valores a serem aplicados na imagem da lib phpThumb
                    'small' => array(//vai gerar small_nomeDoArquivoEnviado.ext
                        //Aplica o metodo adaptiveResize passando os parametros 200 e 100 da classe phpThumb
						 //'cropFromCenter' => 2000,
						  'adaptiveResize' => array(145,115),  
						 //'resize' => array(90,90) 
                    ),                    
                    'medium' => array(                  	                                                             
						 'adaptiveResize' => array(360,200)
                    ),
					'normal' => array('resize' => array(800,600))
                )
            )
        )
    );
}
?>