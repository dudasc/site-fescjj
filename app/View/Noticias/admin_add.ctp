<h3>Cadastro de notícias</h3>
<?php echo $this->Session->flash(); ?>
<?php
 echo $this -> Form -> create('Noticia', array('action' => 'add', 'type' => 'file', 'enctype'=>"multipart/form-data"), array('admin' => true));
?>
  
  <label for="inputData">Data</label>
  <div class="form-group">
		<?php echo $this->Form->input('data', array('label' => false,
											'value'=> date('d-m-Y'),
											 'disabled' => 'disabled',
											 'class' => 'form-control',
											'type' => 'text',
											'id' =>"inputData"
											)
										);?>
      
    </div>
 
  
    <label for="inputTitulo">Título</label>
    <div class="form-group">
    
		<?php echo $this->Form->input('titulo', array('label' => false,
											'placeholder'=>"titulo", 
											'required' => 'required',
											'type' => 'text',
											'id' =>"inputTitulo",
											'class' => 'input-xxlarge form-control')
										);?>
      
    </div>
  
  
  <labelfor="inputDescricao">Descrição</label>
 <div class="form-control">
		<?php echo $this->Form->textarea('descricao', array('label' => false,
											'placeholder'=>"descrição",
											'required' => 'required', 
											'type' => 'text',
											'id' =>"inputDescricao",
											'rows' => '20',
											'class'=> 'input-xxlarge form-control tinymce'
											)
										);?>
										</div>
      
  
    <label  for="inputImagem">Imagem</label>
    <div class="form-group">
     <?php 
		if(empty($this->request->data ['Noticia']['imagem'])){
			echo $this -> Html -> image('small_sem_img.jpg', array("alt" => ""));
		}else{
			echo @$this -> Html -> image('uploads/noticias/medium_'.$this->request->data ['Noticia']['imagem'], array("alt" => ""));
		}
		?>
    </div>
    <div class="form-group">
      <?php echo @$this->Form->file('imagem', array('label' => false,

											
											'id' =>"inputImagem",
											'class' => 'form-control'
											)
										);?>
    </div>
    <div class="form-control">
    	<p>Tipos de arquivo: jpg/jpeg<br>Tamanho máximo: 2Mb</p>
    </div>
  
  
  
    
      
<?php  echo $this->Form->Button('Salvar notícia', array('type' => 'submit','class'=>'btn btn-default'));?>
<?php  echo $this->Form->end();?>
   
  
  
