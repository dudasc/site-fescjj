<h1>Atletas filiados</h1>



<p>Preencha os campos abaixo com seus dados para continuar.</p>
<?php echo $this->Session->flash(); ?>
<div id="form-altera-cadastro">
<?php
 echo $this -> Form -> create('Atleta', array('action' => 'valida', 'type' => 'file', 'enctype'=>"multipart/form-data", 'id' => 'form-filiacao'));
?>
<label for="inputDataNascCidade">Data de nascimento</label>
    <?php echo $this->Form->date('data_nasc', array('label' => false, 'id' =>"inputDataNasc"));?>
  
 <label for="inputEmail">E-mail</label> 
    <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail"));?>   
    
    
    
   <label for="inputCpf">CPF</label>
    <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf"));?>
     
    <br><br><br>
 
    <?php  echo $this->Form->end('Confirmar dados');?>
</div>