<h3>Criar álbum de foto</h3>
<?php echo $this->Session->flash(); ?>
<?php
 echo $this -> Form -> create('Album', array('admin' => true), array('action' => 'wefwerwer'));
?>
  <div class="control-group">
  <label class="control-label" for="inputData">Data</label>
    <div class="controls">
		<?php echo $this->Form->date('dt_cadastro', array('label' => false,
											
											 'value' => date('Y-m-d'),

											'id' =>"inputData"
											)
										);?>
      
    </div>
  </div>

  <div class="control-group">
  <label class="control-label" for="inputDescricao">Descrição</label>
    <div class="controls">
		<?php echo $this->Form->input('descricao', array('label' => false,
											'placeholder'=>"descrição",
											'required' => 'required', 
											'type' => 'text',
											'id' =>"inputDescricao",
											'class'=> 'input-xxlarge'
											)
										);?>
  </div>    
 
  
  
  <div class="control-group">
    <div class="controls">
      
<?php  echo $this->Form->submit('Salvar álbum', array('class'=>'btn'));?>
    </div>
  </div>  
  </form>

  
