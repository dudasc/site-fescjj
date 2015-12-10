<?php

class AtletasController extends AppController {

    public $name = 'Atletas';  

public $paginate = array('Atleta' => array('limit' => 12));
	
function beforeFilter() {
        parent::beforeFilter();
    }
	
	public function index($letra = null){	
		if ($this->request->is('post')) {
			$nome = $this->request->data['Atleta']['nome'];
			$atletas = $this->paginate('Atleta', array("nome LIKE " => "%".$nome."%", 'status' => 1));
			$this->set('atletas', $atletas);
		}else if($letra != null){
			$atletas = $this->paginate('Atleta', array('nome LIKE ' => $letra . "%", 'status' => 1));
			$this->set('atletas', $atletas);
		}else{
			$atletas = $this->paginate('Atleta', array('status' => 1));
			$this->set('atletas', $atletas);
		}
	}
	public function valida(){
		//Verifica se a requisição veio do formulário
		if ($this->request->is('post')) {
			$this->Session->destroy('atletaId'); //zera a sessão
 			$opcoes = array('fields' => array('COUNT(id) as total', 'id', 'nome', 'email', 'cpf', 'rg',),'conditions' => 
						array('data_nasc =' => $this->request->data['Atleta']['data_nasc'], 
							  'email = ' => $this->request->data['Atleta']['email'], 
							  'cpf = ' => $this->request->data['Atleta']['cpf']							  
						)
					);			
			$atleta = $this->Atleta->find('all', $opcoes); //Faz a consulta para verificar se o atleta existe e se os dados estão corretos			
			if($atleta[0][0]['total'] > 0){ //se existir
				$this->Session->write('atletaId', $atleta[0]['Atleta']['id']); //inicia a sessão com o id do atleta
				$this->redirect('editar'); //redireciona para a página de edição			
			}else{
				$this->Session->setFlash('<p class="msg-erro">Dados não conferem</p>');	//se o atleta não existe mostra a mensagem			
			}
		}		
	}
	
	public function editar(){
		//verifica se a sessão não está iniciada e redireciona para pagina de validação			
		if ($this->Session->check('atletaId') == false) {
				$this->Session->setFlash('<p class="msg-erro">Informe seus dados</p>');
				$this->redirect('valida');			
		}else{
			//se a sessão existe pega o valor dela
			$this->Atleta->id = $this->Session->read('atletaId');
			if ($this->request->is('get')) {
				//acessa os dados do usuário da sessão				
				$this->request->data = $this->Atleta->read();
			}else{
				$this->request->data['Atleta']['nome'] = ucwords(strtolower($this->data['Atleta']['nome']));
				$this->request->data['Atleta']['email'] = strtolower($this->data['Atleta']['email']);			
				$this->request->data['Atleta']['cidade'] = ucwords(strtolower($this->data['Atleta']['cidade']));
				$this->request->data['Atleta']['academia'] = ucwords(strtolower($this->data['Atleta']['academia']));
				$this->request->data['Atleta']['professor'] = ucwords(strtolower($this->data['Atleta']['professor']));
				//atualiza os dados do atleta
				if ($this->Atleta->save($this->request->data)) {	
					$this->Session->setFlash('<p class="msg-ok">Dados alterados com sucesso.</p>');											
				} else {
					$this->Session->setFlash('<p class="msg-erro">Erro ao alterar cadastro. Verifique seus dados e tente novamente. </p>');
				}	
				$this->redirect($this->referer());		
			}				 
		}				
	}
	
	public function admin_index(){
		$this->layout = "painel";
		$opcoes = array('limit' => 20, 'order' => array('status' => 'ASC', 'nome' => 'ASC'));
		$this->paginate = $opcoes;
		$atletas = $this->paginate();
		$this->set('atletas', $atletas);
	}	
	
	public function admin_ver($id=null){
		$this->layout = "painel";		
		$this->Atleta->id = $id;
		if ($this->Atleta->exists()) {					
			$this->request->data = $this->Atleta->read();			
		}else{
			$this->redirect('index');
		}		
	}	
	
	public function admin_efetivar_filiacao(){
		$this->layout = "painel";		
		$this->Atleta->id = $this->request->data['Atleta']['id'];
		
			if ($this->request->is('post')) {	
			$sql = "UPDATE atletas set status = 1 WHERE id = ".$this->Atleta->id;		
				

				if($this->Atleta->query($sql)){
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Filiação efetivada com sucesso. 
						  </div>', 'default');	
						    $this->redirect($this->referer());	
					
				}		
		}	
		
	}	
	
	public function delete(){
		$this->Atleta->id = $this->Session->read('atletaId');
		if ($this->Atleta->exists()) {
			if ($this->request->is('post')) {			
				if ($this->Atleta->delete($this->Atleta->id)) {
					$this->Session->setFlash('<p class="msg-ok">Seus dados foram excluídos com sucesso.</p>');
					$this->Session->destroy('atletaId');	
					$this->redirect('valida');
				}else{
					$this->Session->setFlash('<p class="msg-ok">Erro ao excluir dados.</p>');	
				}						
			}
		}
	}
		
	public function calculaIdade( $nascimento ){
		return floor((time() - strtotime($nascimento))/31556926);	
	} 	
	
	public function cadastro() {
		$this->layout = "default";
		if ($this->request->is('post')) {
			$this->request->data['Atleta']['nome'] = ucwords(strtolower($this->data['Atleta']['nome']));
			$this->request->data['Atleta']['email'] = strtolower($this->data['Atleta']['email']);			
			$this->request->data['Atleta']['cidade'] = ucwords(strtolower($this->data['Atleta']['cidade']));
			$this->request->data['Atleta']['academia'] = ucwords(strtolower($this->data['Atleta']['academia']));
			$this->request->data['Atleta']['professor'] = ucwords(strtolower($this->data['Atleta']['professor']));			
			if ($this->Atleta->save($this->data)) {
				$this->Session->setFlash('<p class="msg-ok">Dados cadastrados com sucesso. Após avaliação de seu cadastro, sua filiação será efetivada.</p>');					
			} else {
				$this->Session->setFlash('<p class="msg-erro">Erro ao efetuar cadastro. Verifique seus dados e tente novamente. </p>');
			}
		}		
	}    
}
?>