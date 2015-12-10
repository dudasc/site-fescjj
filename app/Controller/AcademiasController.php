<?php

class AcademiasController extends AppController {

    public $name = 'Academias';  
	
	function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index() {
		$this->layout = 'default'; 			
		$opcoes = array('order' => array('nome' => 'ASC'), 'limit' => 10);
		$academias = $this->Academia->find('all', $opcoes);
		$this->paginate = $opcoes;
		$academias = $this->paginate();
        $this->set('academias', $academias);		
	}
	
	
	public function admin_add($id = null) {
		$this->layout = "painel";
			
		$this->Academia->id = $id;			
		if($id != null){
			 $this->Academia->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Academia->read();
			} else {
				if ($this->Academia->save($this->request->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Academia alterada com sucesso. 
						  </div>', 'default');				
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao salvar academia. 
						  </div>', 'default');
				}
				$this->redirect($this->referer());
			}
		}else{
			if ($this->request->is('post')) {
				if ($this->Academia->save($this->data)) {
					$this->Session->setFlash('<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Academia salva com sucesso. 
				  	</div></p>');					
				} else {
					$this->Session->setFlash('<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Erro ao salvar academia. 
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
        if ($this->Academia->delete($id)) {
            $this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Academia excluída com sucesso. 
						  </div>');
        }else{
        	$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Erro excluir academia. 
						  </div>');
		}
        $this->redirect($this->referer());
    }
	
	
	public function admin_index() {
		$this -> layout = 'painel';		
		$opcoes = array('limit' => 20, 'order' => array('nome' => 'asc'));		
		$this->paginate = $opcoes;		
		$academias = $this->paginate();
		//$academias = $this->Academia->find('all', $opcoes);
        $this->set('academias', $academias);		
	}
}
?>