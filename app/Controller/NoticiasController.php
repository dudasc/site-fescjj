<?php

class NoticiasController extends AppController {

    public $name = 'Noticias';  
	
	public $components = array( 'RequestHandler' );
    public $helpers = array('Js');
	function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index() {
		$this->layout = 'default'; 			
		//paginação
	/*	$options = array(
            //'fields' => array('Noticia.titulo', 'Noticia.resumo'),
            //'conditions' => array('Noticia.active' => true),
            'order' => array('data' => 'DESC', 'id' => 'DESC'),
            'limit' => '10'
        );		
		$this->paginate = $options;
		$noticias = $this->paginate();
		$this->set('noticias', $noticias);
		*/
			
		$opcoes = array('fields' => array('id', 'titulo', 'imagem', 'data'), 
		'order' => array('data' => 'DESC', 'id' => 'DESC'), 'limit' => 10);
		$noticias = $this->Noticia->find('all', $opcoes);
		$this->paginate = $opcoes;
		$noticias = $this->paginate();
        $this->set('noticias', $noticias);
		
	}
	
	public function ver($id=null){
		$this->Noticia->id = $id;
		$noticia = $this->Noticia->read();
		$this->set('noticia', $noticia);		
		
		$opcoes = array('fields' => array('id', 'titulo', 'data'), 
		'order' => array('data' => 'DESC', 'id' => 'DESC'),
		'conditions' => array('id !=' => $id),
		'limit' => 5);
		$maisnoticias = $this->Noticia->find('all', $opcoes);
        $this->set('maisnoticias', $maisnoticias);		
	}
	
	public function admin_add($id = null) {
		$this->layout = "painel";
			
		$this->Noticia->id = $id;			
		if($id != null){
			 $this->Noticia->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Noticia->read();
			} else {
				if ($this->Noticia->save($this->request->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Notícias alterada com sucesso. 
						  </div>', 'default');				
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao salvar notícia. 
						  </div>', 'default');
				}
				$this->redirect($this->referer());
			}
		}else{
			if ($this->request->is('post')) {
				$this->Noticia->set(array(
					'data' => date("Y-m-d")
				));
				if ($this->Noticia->save($this->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Notícia salva com sucesso. 
				  	</div></p>');					
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Erro ao salvar notícia. 
				  	</div>');
				}
				$this->redirect($this->referer());
			}
			
		}		
	}    
	
	public function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Noticia->delete($id)) {
            $this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Notícia excluída com sucesso. 
						  </div>');
        }else{
        	$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir notícia. 
						  </div>');
		}
        $this->redirect($this->referer());
    }
	
	
	public function admin_index() {
		$this -> layout = 'painel';		
		$opcoes = array('fields' => array('id', 'titulo', 'data'),  'order' => array('data' => 'DESC', 'id' => 'DESC'), 'limit' => 20);		
		$this->paginate = $opcoes;		
		$noticias = $this->paginate();
		//$noticias = $this->Noticia->find('all', $opcoes);
        $this->set('noticias', $noticias);		
	}
}

?>