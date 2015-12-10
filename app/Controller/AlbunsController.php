<?php

class AlbunsController extends AppController {
	
    public $name = 'Albuns'; 	
	public $uses = array('Album', 'Foto');		
	
	public function admin_add($id = null) {
        $this->layout = "painel";		
		if($id != null){
			 $this->Album->id = $id;
			if ($this->request->is('get')) {				
				$fotos = $this->Foto->find('all');
				$this->set('fotos', $fotos);				
				$this->request->data = $this->Album->read();				
			} else {
				if ($this->Album->save($this->request->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Álbum salvo com sucesso. 
						  </div>', 'default');
					
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao salvar álbum. 
						  </div>', 'default');
				}
				$this->redirect($this->referer());	
			}
		}else{
			if ($this->request->is('post')) {
				$this->Album->set(array(
					//'data' => date("Y-m-d")
				));
				if ($this->Album->save($this->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Álbum salvo com sucesso. 
				  	</div></p>');
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Erro ao salvar álbum. 
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
        if ($this->Album->delete($id)) {
            $this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Álbum excluído com sucesso. 
						  </div>');
            $this->redirect(array('action' => 'index'));
        }else{
        	$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir álbum. 
						  </div>');
		}
        $this->redirect($this->referer());
    }	
	
	public function admin_index() {
		$this -> layout = 'painel';		
		$opcoes = array('limit' => 20, 'order' => array('id' => 'DESC'));
		$this->paginate = $opcoes;		
		$albuns = $this->paginate();
		//$albuns = $this->Album->find('all', $options); 
        $this->set('albuns', $albuns);
	}   
 }

?>