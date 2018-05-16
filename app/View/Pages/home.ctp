<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <?php
        echo $this -> Html -> image('a.jpg', array('class' => 'first-slide',"alt" => ''));
        ?>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

<div class="container">
	<div class="row">
	<br>
		<div class="col-md-4 box">
    		<h3>NOTÍCIAS E EVENTOS</h3>
 			<ul class="box box-noticias">    
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
				$li = $this->Html->tag('li',$data." - ". $titulo);
				echo $this->Html->link($li, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 
				'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false));		 
		 	endforeach;				
		 ?>      		
    		</ul>
    		 <?php echo $this->html->link('Ver mais notícias', array('controller'=>'noticias', 'action' => 'index'), array('escape'=> false)); ?>     		
     	</div>

     	<div class="col-md-4 box">
			<h3>VÍDEOS E DEPOIMENTOS</h3>
			<div class="box box-video">
		    <?php 		    
				foreach ($videos as $item):
					//$data = date("d/m/Y", strtotime($item['Video']['dt_cadastro']));
					//echo "<small>".$data."</small>";
					echo "<strong>".$item['Video']['descricao']."</strong>";
					echo $item['Video']['cod_frame'];	
				endforeach;
				//echo "<br>";
				echo $this->html->link('Ver mais vídeos', array('controller'=>'videos', 'action' => 'index'), array('escape'=> false));
				
			?>
		</div>
		</div>
		<div class="col-md-4">
			<h3>FESCJJ NO FACEBOOK</h3>
			<div class="box">
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
		</div>
	</div>
</div>