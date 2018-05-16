
<?php
  echo $this->Form->create(
    'User',
    array(
      'url' => array(
        'controller' => 'Users',
        'action'     => 'login'
      )
    )
  );
?>
  <div class="control-group">
    <label for="inputEmail">Login</label>
    <div class="form-group">
<?php echo $this->Form->input('username', array('label' => false,'placeholder'=>"usuário", 'type' => 'text','class' => 'form-control', 'required' => 'required'));?>
      
    </div>
  </div>
  
    <label for="inputPassword">Senha</label>
    <div class="form-group">
    <?php 
	echo $this->Form->password('password',array('label' => false,'type'=>'password', 'placeholder'=>'Senha','class' => 'form-control', 'id'=>"inputPassword", 'required' => 'required'));?>
      
    </div>
  
  
  
      
<?php  echo $this->Form->Button('Entrar', array('', 'class'=>'btn btn-default'));?>
<?php  echo $this->Form->end();?>
  
  
    



</form>