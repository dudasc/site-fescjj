<h1>Contato</h1>
<p>Entre em contato conosco. Preencha o formulário abaixo e deixe seu comentário, dúvidas ou segestões! <br><strong>Obrigado pela sua visita.</strong></p>
<br>
<div id="form-contato">
<?php echo $this -> Session -> flash(); ?>
	<?php echo $this -> Form -> create('Contato'); ?>
	<?php echo $this -> Form -> label('Nome'); ?>
	<?php echo $this -> Form -> input('Contato.nome', array('label' => false, 'type' => 'text')); ?>
	<?php echo $this -> Form -> label('Email'); ?>
	<?php echo $this -> Form -> input('Contato.email', array('label' => false, 'type' => 'email')); ?>
	<?php echo $this -> Form -> label('Telefone'); ?>
	<?php echo $this -> Form -> input('Contato.telefone', array('label' => false, 'type' => 'tel')); ?>
	<?php echo $this -> Form -> label('Mensagem'); ?>
	<?php echo $this -> Form -> input('Contato.msg', array('label' => false, 'cols' => 70)); ?>
<br>
	<?php echo $this -> Form -> end('Enviar mensagem'); ?>

	

</div>
<div id="endereco">
<div id="mapa">
</div>
<p>
Rua Durval Oliveira Souza, 64 </p> <p>Centro - Balneário Arroio do Silva - SC </p>
<p><strong>CEP: </strong>88914-000</p>
<p><strong>E-mail: </strong>contato@fescjj.com.br</p>
<p><strong>Telefone:</strong> (48) 3526-0239</p>

</div>