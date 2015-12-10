<div id="banner" class="flexslider">
<ul class="slides">

	<!--
    <li>
    <?php
	// echo $this->Html->link(
	//echo $this -> Html -> image('05.jpg', array("alt" => "Nacional Open Kids - JIU JITSU e NO-GI", "title" => "Nacional Open Kids - JIU JITSU e NO-GI"));
	
	//'title' => "Campanha jiu jitsu nas escolas 2015 - Participe!")), array('controller' => 'pages', 'action' => 'campanha'), array( 'escape' => false));
	?>
    
  
    </li>
    <li>
    <?php
	// echo $this->Html->link(
	//echo $this -> Html -> image('06.jpg', array("alt" => "Campeonato estadual de Jiu Jitsu 2014 - Chapecó - SC", "title" => "Campeonato estadual de Jiu Jitsu 2014 - Chapecó - SC"));
	
	//'title' => "Campanha jiu jitsu nas escolas 2015 - Participe!")), array('controller' => 'pages', 'action' => 'campanha'), array( 'escape' => false));
	?>
  
    </li>
    -->
    
    <!--
    <li>
   <a href="http://www.fescjj.com.br/inscricoes" title="Circuito Catarinense Profissional de Jiu-Jitsu - Clique aqui para realizar sua inscrição!">
	<?php
	echo $this -> Html -> image('08.jpg', array("alt" => "Circuito Catarinense Profissional de Jiu-Jitsu - Clique aqui para realizar sua inscrição!", 'title' => "Circuito Catarinense Profissional de Jiu-Jitsu - Clique aqui para realizar sua inscrição!"))."</a>";
	
	?>
    </li>
-->
    
    
    <li>
    <?php
	// echo $this->Html->link(
	echo $this -> Html -> image('03.jpg', array("alt" => "Campanha jiu jitsu nas escolas 2015 - Participe!", "title" => "Campanha jiu jitsu nas escolas 2015 - Participe!"));
	
	//'title' => "Campanha jiu jitsu nas escolas 2015 - Participe!")), array('controller' => 'pages', 'action' => 'campanha'), array( 'escape' => false));
	?>
  
    </li>
    
    <li>
   <a href="https://www.facebook.com/Fjjosc" target="_blank" title="Curta nossa fanpage!">
	<?php
	echo $this -> Html -> image('04.jpg', array("alt" => "Curta nossa fanpage", 'title' => "Curta nossa fanpage"))."</a>";
	
	?>
    </li>
    
    
    </ul>
</div>
<div id="sombra-banner"></div>
		
<div class="box-noticia-capa">
    <h2>NOTÍCIAS E EVENTOS</h2>
 
    <ul id="lista-noticias">    
    <?php 
		/*Lista a a última noticia cadastradas*/
		//print_r ($ultima_noticia);
		/*foreach ($ultima_noticia as $item):			 
			 if(empty($item['Noticia']['imagem'])){
				 $img = $this->Html->image('medium_sem_img.jpg', array('alt' => $item['Noticia']['titulo'], 'title' => $item['Noticia']['titulo']));
			 }else{
				 $img = $this -> Html -> image('uploads/noticias/medium_'.$item['Noticia']['imagem'], array("alt" => $item['Noticia']['titulo']));	 
			 }			 
			 $data = date("d/m/Y", strtotime($item['Noticia']['data']));			 			 
			 $data = $this->Html->tag('small', $data,array('class' => 'data'));
			 $titulo = $this->Html->tag('strong', $item['Noticia']['titulo'],array('class' => 'titulo'));
			 $strong = $this->Html->tag('em', '+Leia mais');
			 //$descricao = $this->Html->tag('p', $item['Noticia']['ds']);		 
			 
			 $li = $this->Html->tag('li',$img.$data. $titulo.  $strong,array('class'=>'clearfix primeira-noticia'));
			 echo $this->Html->link($li, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 
		 'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false));
			// echo $this->html->link($li, array('controller'=>'noticias', 'action' => 'ver',$item['Noticia']['id']), array('escape'=> false));			  
		 endforeach; 
		 /*******************************************/
		 ?>
    	
         <?php 
		 
		 	foreach ($noticias as $item):
				if(empty($item['Noticia']['imagem'])){
			 		$img = $this->Html->image('small_sem_img.jpg', array('alt' => $item['Noticia']['titulo'], 'title' => $item['Noticia']['titulo']));
		 		}else{
			 		$img = $this -> Html -> image('uploads/noticias/small_'.$item['Noticia']['imagem'], array("alt" => $item['Noticia']['titulo']));	 
		 		}	 
				$data = date("d/m/Y", strtotime($item['Noticia']['data']));				 
				$data = $this->Html->tag('small', $data,array('class' => 'data'));
				$titulo = $this->Html->tag('strong', $item['Noticia']['titulo'],array('class' => 'titulo'));
				$strong = $this->Html->tag('em', '+Leia mais');		 				 
				$li = $this->Html->tag('li',$img.$data. $titulo.$strong,array('class'=>'clearfix'));
				echo $this->Html->link($li, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 
				'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false));		 
		 	endforeach;	
			
		 ?>      
    </ul>
     <?php echo $this->html->link('Ver mais notícias', array('controller'=>'noticias', 'action' => 'index'), array('escape'=> false)); ?>
     
</div>

<div class="box-videos-capa">
	<h2>VÍDEOS E DEPOIMENTOS</h2>
    <?php 
		foreach ($videos as $item):
			//$data = date("d/m/Y", strtotime($item['Video']['dt_cadastro']));
			//echo "<small>".$data."</small>";
			//echo "<strong>".$item['Video']['descricao']."</strong>";
			echo $item['Video']['cod_frame'];	
		endforeach;
		echo "<br>";
		echo $this->html->link('Ver mais vídeos', array('controller'=>'videos', 'action' => 'index'), array('escape'=> false)); 
	?>
</div>
<div id="box-facebook">
	<h2>Curta a FJJO no facebook</h2>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-like-box" data-href="https://www.facebook.com/Fjjosc?fref=ts" data-width="350" data-height="245" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</div>
<!--
<div id="parceiros">
	<h2>Parceiros</h2>   
</div>
-->