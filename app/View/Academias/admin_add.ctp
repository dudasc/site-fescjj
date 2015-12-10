<h3>Cadastro de academias</h3>
<?php echo $this->Session->flash(); ?>
<?php
 echo $this -> Form -> create('Academia', array('action' => 'add', 'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
?>
  
  <div class="control-group">
    <label class="control-label" for="inputNome">Nome da academia</label>
    <div class="controls">
		<?php echo $this->Form->input('nome', array('label' => false,
											'placeholder'=>"nome", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputNome",
											'class' => 'input-xlarge')
										);?>
      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEndereco">Endereço</label>
    <div class="controls">
		<?php echo $this->Form->input('endereco', array('label' => false,
											'placeholder'=>"endereço", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputEndereco",
											'class' => 'input-xxlarge')
										);?>
      
    </div>
</div>
  
 <div class="control-group">
    <label class="control-label" for="inputEndereco">Telefone</label>
    <div class="controls">
		<?php echo $this->Form->tel('telefone', array('label' => false,
											'placeholder'=>"telefone", 
											'id' =>"inputTelefone")
										);?>
      
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputCidade">Cidade</label>
    <div class="controls">
		<?php echo $this->Form->input('cidade', array('label' => false,
											'placeholder'=>"cidade", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputCidade")
										);?>
      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputProfessor">Professor responsável</label>
    <div class="controls">
		<?php echo $this->Form->input('professor', array('label' => false,
											'placeholder'=>"professor", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputProfessor")
										);?>
      
    </div>
  </div>
  

 
 
  <div class="control-group">
    <label class="control-label" for="inputFoto">Foto</label>
    <div class="controls">
     <?php 
	 
		
		if(empty($this->request->data ['Academia']['foto'])){
			echo $this -> Html -> image('small_sem_img.jpg', array("alt" => ""));
		}else{
			echo @$this -> Html -> image('uploads/academias/small_'.$this->request->data ['Academia']['foto'], array("alt" => ""));
		}
		?>
    </div>
    <div class="controls">
      <?php echo @$this->Form->file('foto', array('label' => false,

											
											'id' =>"inputFoto",
											)
										);?>
    </div>
    <div class="controls">
    	<p>Tipos de arquivo: jpg/jpeg<br>Tamanho máximo: 2Mb</p>
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">
      
<?php  echo $this->Form->submit('Salvar academia', array('class'=>'btn'));?>
    </div>
  </div>
  
  </form>
