<script type="text/javascript">
$(document).ready(function() {
	$("#inputDataNasc").mask("99/99/9999");
})
</script>
<h1>Inscrição para 2ª etapa campeonato catarinense de jiu-jitsu</h1>

<p>Informe seus dados corretarmente para cancelar sua inscrição</p>
<?php echo $this -> Session -> flash(); ?>

<?php
 echo $this -> Form -> create('Inscricao', array('type' => 'file',  'id' => 'form-filiacao', 'class' => 'form-inscricao', 
 'onsubmit' => "return confirm('Deseja realmente cancelar sua inscrição?')"));
?>
    
    <label for="inputCpf">CPF</label>
    <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf",  'size' => '30'));?>
    
    <label for="inputEmail">E-mail</label>
    <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail", 'size' => '40'));?>   
    
    <label for="inputDataNasc">Data de nascimento (dd/mm/aaaa)</label>
    <?php echo $this->Form->input('data_nasc', array('type' => 'text', 'label' => false, 'id' =>"inputDataNasc" ));?>
        
   
   
    	<br>
<br>
  
    <?php  echo $this->Form->end('Cancelar Inscrição');?>
    <?php // echo $this->element('sql_dump'); ?>
    