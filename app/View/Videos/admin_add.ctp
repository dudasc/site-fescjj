<h3>Cadastro de vídeos</h3>
<?php echo $this->Session->flash(); ?>
<?php
  echo $this -> Form -> create('Video', array('action' => 'add'), array('admin' => true));
?>
  <div class="control-group">
  <label class="control-label" for="inputData">Data</label>
    <div class="controls">
		<?php echo $this->Form->date('dt_cadastro', array('label' => false,
											'value'=> date('Y-m-d'),
											 'disabled' => 'disabled',

											'id' =>"inputData"
											)
										);?>
      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitulo">Descrição do vídeo</label>
    <div class="controls">
		<?php echo $this->Form->input('descricao', array('label' => false,
											'placeholder'=>"descrição", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputDescricao",
											'class' => 'input-xxlarge')
										);?>
      
    </div>
  </div>
  <div class="control-group">
  <label class="control-label" for="inputDescricao">Código do frame</label>
  <div class="controls">
  <?php echo @$this->data['Video']['cod_frame'];?>
  </div>
    <div class="controls">
		<?php echo $this->Form->textarea('cod_frame', array('label' => false,
											'placeholder'=>"frame",
										
											
											'id' =>"inputFrame",
											'rows' => '6',
											'class'=> 'input-xxlarge'
											)
										);?>
      
    </div>
   </div>
   
  
  
  <div class="control-group">
    <div class="controls">
      
<?php  echo $this->Form->submit('Salvar vídeos', array('class'=>'btn'));?>
    </div>
  </div>
  
  </form>
