 <h3>Adicionar fotos neste álbum</h3>
    
    <?php
	 echo "<h4><strong>Descrição do álbum: </strong>".$album[0]['Album']['descricao']."</h4>";
	foreach($album as $item){
		 echo $this -> Form -> create('Foto', array('action' => 'add', 'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
 		// echo $this -> Form -> create('Foto',array(  'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
		
		
			
		 echo $this->Form->input('albuns_id', array('label' => false, 'type' => 'hidden', 'value' => $item['Album']['id']));
	}
	?>  
    <?php echo $this->Session->flash(); ?>
  <div class="control-group">
  <label class="control-label" for="inputDescricao">Adicionar uma imagem</label>
    <div class="controls">
		<?php echo $this->Form->file('nome', array('label' => false, 'id' =>"inputImagem", 'required' ));?>
  </div>  
  <div class="controls">
  	<p>Tipo de arquivos: somente JPG/JPEG<br>
    Tamanho máximo: 2MB
    </p>
  </div>  
 
  </div>
  
  <div class="control-group">
  
    <div class="controls">  
      
<?php  echo $this->Form->submit('Cadastrar foto', array('class'=>'btn'));?>
    </div> 
  </div>   
  </form>
  <?php
  if(!empty($fotos)){
	  ?>
  <p><strong>*Clique nas imagens abaixo para excluir</strong></p>
  <?php
  echo '<ul id="album">';
  foreach($fotos as $item){
	    $foto =  $this->Html->image("uploads/fotos/small_".$item['Foto']['nome'], array('alt' =>'Excluir esta foto', 'title' => 'Excluir esta foto'), array('admin' => true));
	   
	    echo $this->Html->link("<li>".$foto."</li>", array('controller'=>'fotos', 'action' => 'delete',$item['Foto']['id']), array('escape'=> false));
	  
  }
  echo "</ul>";
  }
  ?>