<script type="text/javascript">
			$(document).ready(function() {
			
$("#inputDataNasc").mask("99/99/9999");
		})
</script>
<h1>Inscrição para 2ª ETAPA CATARINENSE DE JIU-JITSU</h1>

<p>Para realizar e validar sua inscrição preencha os campos abaixos e efetue o depósito bancário nos dados da conta abaixo. Sua inscrição será validada apenas após a confirmação do pagamento. <br><br><strong>Dados para o depósito:</strong><br>
<strong>Banco do Brasil</strong> <br> <strong>Agência: </strong>3.674-9 <br><strong>Conta corrente: </strong>9.507-9<br><strong>Cliente: </strong>Carlos de Oliveira Batista</strong>
</p>
<?php echo $this -> Session -> flash(); ?>

<?php
 echo $this -> Form -> create('Inscricao', array('type' => 'file',  'id' => 'form-filiacao', 'class' => 'form-inscricao'));
?>


    <label for="inputNome">Nome completo</label>
    <?php echo $this->Form->input('nome', array('label' => false, 'type' => 'text', 'id' =>"inputNome", 'size' => '60'));?>
    
    <label for="inputSexo">Sexo</label>
	<?php echo $this->Form->input('sexo', array('label'=>false, 'id' =>"inputSexo", 'options' => 
                        array( '' => 'Selecione...', 
                                        'M' => 'Masculino', 
                                        'F' => 'Feminino')));?>   

    <label for="inputCpf">CPF (responsável pela inscrição)</label>
    <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf",  'size' => '30'));?>
    
     <label for="inputRg">RG</label>
    <?php echo $this->Form->input('rg', array('label' => false, 'type' => 'text', 'id' =>"inputRg", 'size' => '30'));?>   
    
    <label for="inputEmail">E-mail</label>
    <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail", 'size' => '40'));?>   
    
    <label for="inputDataNasc">Data de nascimento (dd/mm/aaaa)</label>
    <?php echo $this->Form->input('data_nasc', array('type' => 'text', 'label' => false, 'id' =>"inputDataNasc" ));?>
          
    <label for="inputCidade">Cidade</label>
    <?php echo $this->Form->input('cidade', array('label' => false, 'id' =>"inputCidade"));?>
    
    <label for="inputEquipe">Equipe</label>
    <?php echo $this->Form->input('equipe', array('label' => false, 'id' =>"inputEquipe"));?>
    
    <label for="inputProfessor">Professor</label>
    <?php echo $this->Form->input('professor', array('label' => false, 'id' =>"inputProfessor"));?>
    
    <label for="inputCategoria">Categoria</label>
    <?php echo $this->Form->input('categoria', array('label'=>false, 'id' =>"inputCategoria", 'options' => 
                        array( '' => 'Selecione...', 
                                        'galo' => 'Galo', 
                                        'pluma' => 'Pluma', 
                                        'leve' => 'Leve',
                                        'médio' => 'Médio',
                                        'meio pesado' => 'Meio pesado', 
                                        'pesado' => 'Pesado',
                                        'super pesado' => 'Super pesado',
                                        'pesadíssimo' => 'Pesadíssimo')));?>   
    
    
    <label for="inputAbsoluto">Inscrição para absoluto</label>
    <?php echo $this->Form->checkbox('absoluto', array('value' => '1','label' => false, 'id' =>"inputAbsoluto"));?>
    
    <label for="inputFaixa">Faixa</label>
    <?php echo $this->Form->input('faixa', array('label'=>false, 'id' =>"inputFaixa", 'options' => 
                        array( '' => 'Selecione...', 
                                        'branca' => 'Branca', 
                                        'cinza' => 'Cinza', 
                                        'amarela' => 'Amarela',
                                        'laranja' => 'Laranja',
                                        'verde' => 'Verde', 
                                        'azul' => 'Azul',
                                        'roxa' => 'Roxa',
                                        'marrom' => 'Marrom',
                                        'preta' => 'Preta',)));?>   
    
    <label for="inputPeso">Peso</label>
    <?php echo $this->Form->input('peso', array('label' => false, 'id' =>"inputPeso", "size" => '5'));?>
    
     <label for="inputComprovante">Comprovante de depósito</label>
    <?php echo $this->Form->file('comprovante', array('label' => false,

                                        
                                        'id' =>"inputComprovante"
                                        )
                                    );?>
  
    	<br>
    	<br>
<br>
  
    <?php  echo $this->Form->end('Efetuar Inscrição');?>
    <?php //echo $this->element('sql_dump'); ?>
    