<div class="container-fluid bg-main bg-main-1">
    <div class="container">
        <div class="row">
            <h1>Notícias & eventos</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-12">
      <br>
       <?php 

        $data = date("d/m/Y", strtotime($noticia['Noticia']['data']));
       
        if(!empty($noticia['Noticia']['imagem'])){
           $thumb =  $this->Html->image("uploads/noticias/medium_".$noticia['Noticia']['imagem'], array('class' => 'img-noticia img-thumbnail img-responsive', 'alt' =>$noticia['Noticia']['titulo'], 'title' => $noticia['Noticia']['titulo']));
           $foto =  $this->webroot."img/uploads/noticias/".$noticia['Noticia']['imagem'];
           echo '<a href="'.$foto.'" class="lightview" 
            data-lightview-group="example"
          data-lightview-caption="" alt="" title=""/>'.$thumb."</a>";
        }
        
        echo '<div class="dados-noticia">';
         echo '<small class="data">'.$data."</small>";
        echo '<h2>'.$noticia['Noticia']['titulo']. "</h2>";
        echo  "<br>".$noticia['Noticia']['descricao']."</div>";
        ?>
        </div>
  <div class="col-md-12">
  <br>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <div class="fb-like" data-href="<?php echo Router::url($this->here, true);?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>


<br>
   
      <?php 
  		echo $this -> Html -> link('Voltar', array('controller' => 'noticias', 'action' => 'index'), 
  			array('alt' => 'Notícias e eventos', 'title' => 'Notícias e eventos', 'class' => 'bt-voltar')); 
  	?>
      <br><br>
  <h4>Outras notícias</h4>
      <ul class="mais-noticias">
      <?php
          foreach($maisnoticias as $item):
              $ndata = "<strong>".date("d/m/Y", strtotime($item['Noticia']['data']))."</strong>";
  			$titulo = $item['Noticia']['titulo'];
  			
  			 echo "<li>".$this->Html->link($ndata." - ".$titulo, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 
  		 'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false))."</li>";
          endforeach;
      ?>
      </ul>
      </div>
    </div>
   </div>