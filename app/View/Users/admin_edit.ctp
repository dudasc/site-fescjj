<h3>Dados pessoais</h3>


	<?php echo $this -> Form -> create('User', array('action' => 'edit')); ?>

	<?php echo $this -> Form -> label('User.username', 'login'); ?>
	<?php echo $this -> Form -> input('username', array('label' => false, 'size' => 50)); ?>

	

	<?php echo $this -> Form -> label('User.password', 'Nova senha'); ?>
	<?php echo $this -> Form -> input('password', array('type' => 'password', 'label' => false, 'size' => 20, 'value' => '')); ?>

	<?php echo $this -> Form -> label('User.password_confirm', 'Confirmar nova senha'); ?>
	<?php echo $this -> Form -> input('password_confirm', array('type' => 'password', 'label' => false, 'size' => 20, 'value' => '')); ?>

	<?php echo $this -> Form -> submit('Atualizar dados', array('class' => 'btn')); ?>
	
<?php echo $this -> Session -> flash(); ?>