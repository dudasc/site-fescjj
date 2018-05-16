<?php

class ContatosController extends AppController {

    public $name = 'Contatos'; 
	public $components = array('Email');
	
	public function index() {
		if ($this -> request -> is('POST')) {
	
			$name = $this -> data['Contato']['nome'];
			$from = $this -> data['Contato']['email'];
			$subject = 'Contato do Site fescjj.com.br';
			$fone = $this -> data['Contato']['telefone'];
			$msg = $fone."<br>".$this -> data['Contato']['msg'];


			//if (!preg_match("/<([^>]+)>/i", $name) and !preg_match("/<([^>]+)>/i", $from) and 
				//	!preg_match("/<([^>]+)>/i", $msg)) {			

				$this -> Email -> sendAs = 'text';
				// html, text, both
				$this -> set('conteudo', $msg);
				// especifica variavel da mensagem para o template
				//$this -> Email -> layout = 'default';
				// views/elements/email/html/contact.ctp
				//$this -> Email -> template = 'default';
	
				// set view variables as normal
				$this -> set('from', $name);
				$this -> set('msg', $msg);
				$this -> Email -> to = 'contato@fescjj.com.br';
				//$this -> Email -> to = 'eduardoscoelho@hotmail.com';
				$this -> Email -> subject = $subject;
				$this -> Email -> replyTo = $from;
				$this -> Email -> from = $name . '<' . $from . '>';
	
				if ($this -> Email -> send($msg)) {
					$this->Session->setFlash('<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Sua mensagem foi enviada com sucesso.
						  </div>', 'default');	
				} else {
					$this->Session->setFlash('<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									&times;
								</button>
								Erro ao enviar mensagem.
						  </div>', 'default');	
				}
			//}else{
			//	$this -> Session -> setFlash('<p class="email-erro">Ocorreu um erro ao enviar e-mail.</p>');
			//}
			
			// $this->redirect(´/´);
		}
	}
		
	 
 }

?>