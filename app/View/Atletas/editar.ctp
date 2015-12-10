<h1>Formulário de filiação de atletas</h1>
<script>  
function confirmaExclusao() {  
   if (confirm("Tem certeza que deseja cancelar sua filiação?")) {  
      return true; 
   }  
   return false;
}  
</script> 

<?php echo $this->Session->flash(); ?>
<br>
<?php echo $this -> Form -> create('Atleta', array('action' => 'delete', 'id' => 'form-delete-filiacao', 'onSubmit'=>"return confirmaExclusao()"));?>
<?php echo $this->Form->input('id', array('label' => false, 'type' => 'hidden'));?>
<?php  echo $this->Form->end('Desfazer filiação', array('class' => 'btn btn-danger'));?>
    
    <br><br><br>
    
<?php
 echo $this -> Form -> create('Atleta', array('action' => 'editar', 'type' => 'file', 'enctype'=>"multipart/form-data", 'id' => 'form-filiacao'));
?>


<div class="box-form-filiacao">
    <label for="inputNome">Nome completo</label>
    <?php echo $this->Form->input('nome', array('label' => false, 'type' => 'text', 'id' =>"inputNome"));?>
    
    <label for="inputCpf">CPF</label>
    <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf"));?>
    
     <label for="inputRg">RG</label>
    <?php echo $this->Form->input('rg', array('label' => false, 'type' => 'text', 'id' =>"inputRg"));?>
    
    <label for="inputEmail">E-mail</label>
    <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail"));?>   
    
    <label for="inputDataNascCidade">Data de nascimento</label>
    <?php echo $this->Form->date('data_nasc', array('label' => false, 'id' =>"inputDataNasc"));?>
        
   
    </div>
    <div class="box-form-filiacao">
    	<label for="inputCidade">Cidade</label>
        <?php echo $this->Form->input('cidade', array('label' => false, 'id' =>"inputCidade"));?>
        
        <label for="inputAcademia">Academia</label>
        <?php echo $this->Form->input('academia', array('label' => false, 'id' =>"inputAcademia"));?>
        
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
											'pesadíssimo' => 'Pesadíssimo',
											'absoluto' => 'Absoluto')));?>  
        
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
        <?php echo $this->Form->input('peso', array('label' => false, 'id' =>"inputPeso"));?>
                      
        
    </div>
    
    <div class="box-form-filiacao sem-borda">
    	<label for="inputFoto">Foto</label>
        <?php
       if(empty($this->data['Atleta']['foto'])){
					echo $this -> Html -> image('sem_img_f.jpg', array("class"=> "foto-atleta", "alt" => $this->data['Atleta']['nome']));
				}else{
					echo  $this -> Html -> image('uploads/atletas/small_'.$this->data['Atleta']['foto'], array("class"=> "foto-atleta", "alt" => $this->data['Atleta']['nome']));}?>
        <?php echo @$this->Form->file('foto', array('label' => false, 'id' =>"inputFoto", 'required' => false));?>
    </div>
   <!--
    <textarea>Solicito minha filiação na FJJOSC e AUTORIZO utilizar e veicular meus dados aqui cadastrados na participação em competições esportivas, a fim de divulgar atividades desta entidade</textarea>
      <?php //echo $this->Form->checkbox('termo', array('label' => false,  'id' =>"inputTermo"));?>
     <label class="termo" for="inputTermo">Confirmo o termo acima</label>
     
     <br><br>
     -->
    <?php  echo $this->Form->end('Confirmar dados');?>
        
        
      