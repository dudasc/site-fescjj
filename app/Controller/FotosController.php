<?php

class FotosController extends AppController {
	public $uses = array('Album', 'Foto');
    public $name = 'Fotos'; 
	
	function beforeFilter() {
		parent::beforeFilter();
	}
		
	
	public function index() {
		//paginação
		$options = array('order' => array('id' => 'DESC'), 'limit' => '12');		
		
		$this->paginate = $options;
		// Roda a consulta, já trazendo os resultados paginados
		$albuns = $this->paginate();
		
        $this->set('albuns', $albuns);
	} 
	
	public function admin_add($id = null){
		$this->layout = "painel";
		
		//consulta todas as fotos do album
		$options = array('order' => array('Foto.id' => 'DESC'), 'conditions' => array('albuns_id =' => $id));
		$fotos = $this->Foto->find('all', $options);
        $this->set('fotos', $fotos);		
		
		
		$options = array('conditions' => array('Album.id =' => $id));
		$album = $this->Album->find('all', $options);
        $this->set('album', $album);
		
		
		if ($this->request->is('post')) {					
			if ($this->Foto->save($this->data)) {
				$this->Session->setFlash('<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Foto cadastrada com sucesso. 
				</div></p>');					
			} else {
				$this->Session->setFlash('<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Erro ao cadastrar foto. 
				</div>');					
			}
			$this->redirect($this->referer());
		}			
	}
	
	public function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(sprintf(__('ID inválido para %s.', true)));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Foto->delete($id)) {
            $this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Foto excluída com sucesso. 
						  </div>');
        }else{
        	$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir foto. 
						  </div>');
		}
		 $this->redirect($this->referer());
    }
	

	
	public function ver($id = null) {
		$options = array('order' => array('Foto.id' => 'DESC'), 'conditions' => array('albuns_id =' => $id));
		$fotos = $this->Foto->find('all', $options);
        $this->set('fotos', $fotos);		
	} 

	
 }

?>