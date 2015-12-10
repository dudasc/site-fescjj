<h3>Cadastro de notícias</h3>
<?php echo $this->Session->flash(); ?>
<?php
 echo $this -> Form -> create('Noticia', array('action' => 'add', 'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
?>
  <div class="control-group">
  <label class="control-label" for="inputData">Data</label>
    <div class="controls">
		<?php echo $this->Form->input('data', array('label' => false,
											'value'=> date('d-m-Y'),
											 'disabled' => 'disabled',
											'type' => 'text',
											'id' =>"inputData"
											)
										);?>
      
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputTitulo">Título</label>
    <div class="controls">
		<?php echo $this->Form->input('titulo', array('label' => false,
											'placeholder'=>"titulo", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputTitulo",
											'class' => 'input-xxlarge')
										);?>
      
    </div>
  </div>
  <div class="control-group">
  <label class="control-label" for="inputDescricao">Descrição</label>
    <div class="controls">
		<?php echo $this->Form->textarea('descricao', array('label' => false,
											'placeholder'=>"descrição",
											'required' => 'required', 
											'type' => 'text',
											'id' =>"inputDescricao",
											'rows' => '20',
											'class'=> 'input-xxlarge jqte'
											)
										);?>
  </div>    
  <div class="control-group">
    <label class="control-label" for="inputImagem">Imagem</label>
    <div class="controls">
     <?php 
		if(empty($this->request->data ['Noticia']['imagem'])){
			echo $this -> Html -> image('small_sem_img.jpg', array("alt" => ""));
		}else{
			echo @$this -> Html -> image('uploads/noticias/medium_'.$this->request->data ['Noticia']['imagem'], array("alt" => ""));
		}
		?>
    </div>
    <div class="controls">
      <?php echo @$this->Form->file('imagem', array('label' => false,

											
											'id' =>"inputImagem",
											)
										);?>
    </div>
    <div class="controls">
    	<p>Tipos de arquivo: jpg/jpeg<br>Tamanho máximo: 2Mb</p>
    </div>
  </div>
  
  
  <div class="control-group">
    <div class="controls">
      
<?php  echo $this->Form->submit('Salvar notícia', array('class'=>'btn'));?>
    </div>
  </div>
  
  </form>
