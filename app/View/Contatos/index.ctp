<div class="container-fluid bg-main bg-main-4">
	<div class="container">
		<div class="row">
			<h1>Contato</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Entre em contato conosco</h2>
			<p>Preencha o formulário abaixo e deixe seu comentário, dúvidas ou segestões! <br><strong>Obrigado pela sua visita.</strong></p>
			<p><br></p>
		</div>
	
		<div class="col-md-6">
			<?php echo $this -> Session -> flash(); ?>
			<?php echo $this -> Form -> create('Contato'); ?>

			<div class="form-group">
			   <?php echo $this -> Form -> label('Nome'); ?>
				<?php echo $this -> Form -> input('Contato.nome', array('label' => false, 'type' => 'text', 'class' => 'form-control input-lg')); ?>
			 </div>
			<div class="form-group">
				<?php echo $this -> Form -> label('Email'); ?>
				<?php echo $this -> Form -> input('Contato.email', array('label' => false, 'type' => 'email', 'class' => 'form-control input-lg')); ?>
			</div>
			<div class="form-group">
				<?php echo $this -> Form -> label('Telefone'); ?>
				<?php echo $this -> Form -> input('Contato.telefone', array('label' => false, 'type' => 'tel', 'class' => 'form-control input-lg')); ?>
			</div>
			<div class="form-group">
				<?php echo $this -> Form -> label('Mensagem'); ?>
				<?php echo $this -> Form -> input('Contato.msg', array('label' => false, 'rows' => 8,  'class' => 'form-control input-lg')); ?>
			</div>
				<?php echo $this -> Form -> submit('Enviar mensagem', array('class' => 'btn btn-default')); ?>		
				<?php echo $this -> Form ->end()?>

		</div>
		<div class="col-md-6">
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1045.274754639262!2d-49.417397842234436!3d-28.987867579951352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952232683d438747%3A0xa864136f5867c968!2sR.+Durval+e+de+Souza%2C+64%2C+Balne%C3%A1rio+Arroio+do+Silva+-+SC%2C+88914-000!5e1!3m2!1spt-BR!2sbr!4v1461943524482" width="100%" height="270" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="info-contato">
				<p><strong>Endereço: </strong>Rua Durval Oliveira Souza, 64<br>		Centro - Balneário Arroio do Silva - SC </p>
				<p><strong>CEP: </strong>88914-000</p>
				<p><strong>E-mail: </strong>contato@fescjj.com.br</p>
				<p><strong>Telefone:</strong> (48) 3526-0239</p>
			</div>
		</div>
	</div>
</div>

