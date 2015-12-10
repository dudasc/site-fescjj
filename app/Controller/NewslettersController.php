<?php

class NewslettersController extends AppController{
	 public $name = 'Newsletters';  
	
	public function index(){
		$this->Newsletter->set(array(
					'data' => date("Y-m-d")
				));
		if ($this->Newsletter->save($this->data)) {
			$this->Session->setFlash('<p class="email-ok">Seu e-mail foi cadastrado com sucesso!</p>', 'default');
			
		} else{
			$this->Session->setFlash('<p class="email-erro">Ocorreu um erro ao cadastrar seu email.</p>', 'default');
		}
		
		
	}
}
?>