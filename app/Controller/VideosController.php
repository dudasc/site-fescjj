<?php

class VideosController extends AppController {

    public $name = 'Videos';  
	public $uses = array('Video');	
	
	public function index() {
		//paginação
		$options = array(
            //'fields' => array('Noticia.titulo', 'Noticia.resumo'),
            //'conditions' => array('Noticia.active' => true),
            'order' => array('id' => 'DESC', 'data' => 'DESC'),
            'limit' => '6'
        );		
		
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$videos = $this->paginate();
		// Envia os dados pra view
		$this->set('videos', $videos);
		
	}  
	public function admin_index() {
		$this->layout = "painel";
		$opcoes = array('limit' => 20,'fields' => array('id', 'descricao', 'dt_cadastro'), 
		'order' => array('dt_cadastro' => 'DESC', 'id' => 'DESC'));		
		$this->paginate = $opcoes;		
		$videos = $this->paginate();
		//$videos = $this->Video->find('all', $opcoes);
        $this->set('videos', $videos);		
	} 
	
	public function admin_add($id = null) {
		$this->layout = "painel";
			
		$this->Video->id = $id;
			
		//se a váriavel estiver setada
		if($id != null){
			 $this->Video->id = $id;
				if ($this->request->is('get')) {
					$this->request->data = $this->Video->read();
				} else {
				
					if ($this->Video->save($this->request->data)) {
						$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Vídeo salvo com sucesso. 
						  </div>', 'default');
					} else {
						$this->Session->setFlash('<div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">
										&times;
									</button>
									Erro ao salvar vídeo. 
								  </div>', 'default'); 
					}
					$this->redirect($this->referer());	
				}
		}else{
			if ($this->request->is('post')) {				
				
				if ($this->Video->save($this->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Vídeo salvo com sucesso. 
					  </div></p>');
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Erro ao salvar vídeo. 
					  </div>');
				}
				$this->redirect($this->referer());	
			}
		}		
	}   
	/*public function admin_adssd($id = null) {
        $this->layout = 'painel';
        $this->Video->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Video->read();
        } else {
            if ($this->Video->save($this->request->data)) {
                $this->redirect('index');
            } else {
                $this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro ao salvar vídeo. 
						  </div>', 'default');
            }
        }
    }
	*/
	public function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Video->delete($id)) {
            $this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Vídeo excluído com sucesso. 
						  </div>');
            $this->redirect(array('action' => 'index'));
        }else{
       		$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir vídeo. 
						  </div>');
		}
       $this->redirect($this->referer());	
    } 
 }

?>