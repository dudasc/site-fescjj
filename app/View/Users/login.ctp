<?php
  echo $this->Form->create(
    'User',
    array(
      'url' => array(
        'controller' => 'Users',
        'action'     => 'login'
      ),
	  'class' =>   'form-horizontal'
    )
  );
?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Login</label>
    <div class="controls">
<?php echo $this->Form->input('username', array('label' => false,'placeholder'=>"usuário", 'type' => 'text', 'required' => 'required'));?>
      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Senha</label>
    <div class="controls">
    <?php 
	echo $this->Form->input('password',array('label' => false,'type'=>'password', 'placeholder'=>'Senha', 'id'=>"inputPassword", 'required' => 'required'));?>
      
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      
<?php  echo $this->Form->submit('Entrar', array('class'=>'btn'));?>
    </div>
  </div>
    



</form>