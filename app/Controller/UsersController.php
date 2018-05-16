<?php

class UsersController extends AppController {

    public $name = 'Users';  
	
	function beforeFilter() {
		parent::beforeFilter();
	}
	
	public function index() {
		$this -> redirect($this -> login());
	}

	public function login() {
		$this -> layout = 'login';
		
		if ($this -> request -> is('post')) {
			if ($this -> Auth -> login()) {
				return $this -> redirect($this -> Auth -> redirect());
			} else {
				
				$this -> Session -> setFlash(__('<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Usuário ou senha incorretos. 
						  </div>'));
			}
		}
	}
	
	public function admin_index() {
		$this -> layout = 'painel';
		//Pegando o usuario da sessão
		$this -> User -> id = $this -> Auth -> User('id');
		$this -> set('usuario', $this -> User -> read());
	}

    public function logout()
    {
        $this->Session->setFlash(__('<div class="alert alert-sucess">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Deslogado com sucesso. 
						  </div>'), 'default');
        $this->redirect($this->Auth->logout());
    }

    public function admin_logout()
    {
        $this->Session->setFlash(__('<div class="alert alert-sucess">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Deslogado com sucesso. 
						  </div>'), 'default');
        $this->redirect($this->Auth->logout());
    }
	
	public function admin_edit($id = null) {
		$this -> layout = 'painel';

		$this -> User -> id = $this -> Auth -> User('id');
		

		if ($this -> request -> is('get')) {
			$this -> request -> data = $this -> User -> read();
		
		} else {
			if ($this -> User -> save($this -> request -> data)) {
				$this -> redirect('index');
			}
		}
	}
    
 }

?>