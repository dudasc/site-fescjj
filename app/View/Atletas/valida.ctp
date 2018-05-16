<div class="container-fluid bg-main bg-main-1">
	<div class="container">
		<div class="row">
			<h1>Filiações</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Edite seu cadastro</h2>

			<p>Preencha os campos abaixo com seus dados para continuar.</p>
			<br>
			<?php echo $this->Session->flash(); ?>
			</div>
			<div class="col-md-3">

<?php
 echo $this -> Form -> create('Atleta', array('action' => 'valida', 'type' => 'file', 'enctype'=>"multipart/form-data", 'id' => 'form-filiacao'));
?>
	<div class="form-group">
		<label for="inputDataNasc">Data de nascimento</label>
	    <?php echo $this->Form->date('data_nasc', array('label' => false, 'id' =>"inputDataNasc", 'class' => 'form-control'));?>
  	</div>
  	<div class="form-group">
 <label for="inputEmail">E-mail</label> 
    <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail", 'class' => 'form-control'));?>   
    </div>   
    <div class="form-group">
   <label for="inputCpf">CPF</label>
    <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf", 'class' => 'form-control'));?>
    </div>
     <?php  echo $this->Form->Button('Confirmar dados', array('type' => 'submit', 'class' => 'btn btn-default'));?>
 
    <?php  echo $this->Form->end();?>
    </div>
    <div class="col-md-offset-9"></div>
    </div>

</div>
</div>