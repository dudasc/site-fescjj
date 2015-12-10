<?php

class InscricoesController extends AppController {

    public $name = 'Inscricao'; 
	
	
	
	
	
	public function index() {}
	
	public function cadastro() {
		if ($this -> request -> is('POST')) {
			$this->Inscricao->set(array(
				'data_nasc' => date("Y-m-d")
			));
			
			
			if($this->request->data['Inscricao']['absoluto'] != null){
				$this->Inscricao->set(
					array('absoluto' => '1'));
			}		
			
			
/*			 $data = explode('/', $this->request->data['Inscricao']['data_nasc']);
                $data = $data[2].'-'.$data[1].'-'.$data[0];
                $this->request->data['Inscricao']['data_nasc'] = $data;		*/
			$this->request->data['Inscricao']['nome'] = ucwords(strtolower($this->data['Inscricao']['nome']));
			$this->request->data['Inscricao']['email'] = strtolower($this->data['Inscricao']['email']);			
			$this->request->data['Inscricao']['cidade'] = ucwords(strtolower($this->data['Inscricao']['cidade']));
			$this->request->data['Inscricao']['equipe'] = ucwords(strtolower($this->data['Inscricao']['equipe']));
			$this->request->data['Inscricao']['professor'] = ucwords(strtolower($this->data['Inscricao']['professor']));
			
			if ($this->Inscricao->save($this->data)) {
				$this->Session->setFlash('<p class="inscricao-ok">Parabéns, sua inscrição foi efetuada com sucesso!!!</p>
				<p>Após a confirmação do pagamento sua inscrição será validada.</p><p></p>');
				$this->redirect('confirma');					
			} else {
				echo mysql_error();
				$this->Session->setFlash('<p class="inscricao-erro">Erro ao efetuar sua inscrição. Verifique seus dados e tente novamente.</p>');							
			}
				
		}
	
	}
	public function confirma() {}
	
	public function valida() {
		if ($this -> request -> is('POST')) {
			
			$data = explode('/', $this->request->data['Inscricao']['data_nasc']);
            $data = $data[2].'-'.$data[1].'-'.$data[0];
            $this->request->data['Inscricao']['data_nasc'] = $data;
			
			
 			$opcoes = array('fields' => array('COUNT(id) as total', 'id'),'conditions' => array('data_nasc =' => $this->request->data['Inscricao']['data_nasc'], 
							  'email = ' => $this->request->data['Inscricao']['email'], 
							  'cpf = ' => $this->request->data['Inscricao']['cpf']							  
						)
					);			
			$atleta = $this->Inscricao->find('all', $opcoes); //Faz a consulta para verificar se o atleta existe e se os dados estão corretos			
			if($atleta[0][0]['total'] > 0){ //se existir
				$this->Inscricao->id = $atleta[0]['Inscricao']['id'];
				$this->Inscricao->delete($this->Inscricao->id);
				$this->Session->setFlash('<p class="inscricao-ok">Sua inscrição foi cancelada com sucesso.</p>');	
				$this->redirect('confirma');		
			}else{
				$this->Session->setFlash('<p class="inscricao-erro">Dados inválidos.</p>');
			}
		}
	}
		
	public function admin_index(){
		$this -> layout = 'painel';		
		$opcoes = array('order' => array('id' => 'DESC'), 'limit' => 50);		
		$this->paginate = $opcoes;		
		$inscricoes = $this->paginate();
		//$inscricoes = $this->Inscricao->find('all');
		$this->set('inscricoes', $inscricoes);
	}
		
	public function admin_efetivar($id = null){
			$this->Inscricao->id = $id;	
		
			$sql = "UPDATE inscricoes set status = 1 WHERE id = ".$this->Inscricao->id;		
			if($this->Inscricao->query($sql)){
				$this->Session->setFlash('<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">
								&times;
							</button>
							Inscricao efetivada com sucesso. 
					  </div>', 'default');	
									
			}else{
				$this->Session->setFlash('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">
								&times;
							</button>
							Erro ao efetivar inscrição. 
					  </div>', 'default');
			}
		$this->redirect('index');				
	}	 
}

?>