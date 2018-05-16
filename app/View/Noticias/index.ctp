<div class="container-fluid bg-main bg-main-3">
    <div class="container">
        <div class="row">
            <h1>Notícias & eventos</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2>Notícias</h2>

	<?php
        if(empty($noticias)){
          echo '<p>Nenhuma notícia cadastrada.</p>';
        }else{
    ?>
    </div>
	<?php
        
        foreach ($noticias as $item): 
            echo '<div class="col-md-6 col-sm-6 col-xs-6 lista-noticias">';
            if(empty($item['Noticia']['imagem'])){
                $img = $this->Html->image('small_sem_img.jpg', array('alt' => $item['Noticia']['titulo'],'class'=>'img-thumbnail img-noticia', 'title' => $item['Noticia']['titulo']));
            }else{
                $img = $this -> Html -> image('uploads/noticias/small_'.$item['Noticia']['imagem'], array('class'=>'img-thumbnail img-noticia img-responsive',"alt" => $item['Noticia']['titulo']));	 
            }
            $data = date("d/m/Y", strtotime($item['Noticia']['data']));		 
            $data = $this->Html->tag('small', $data);
            $titulo = $this->Html->tag('h4', $item['Noticia']['titulo']);
            $strong = $this->Html->tag('em', 'Leia mais', array('class' => 'bt-leia-mais'));		
            
            $noticia = $img.'<div class="dados-noticia">'.$data.$titulo.$strong."</div>";		 	
            
            echo $this->Html->link($noticia, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false));
           echo '</div>';
        endforeach;  
    ?>  




<div class="col-md-12">
    <nav>
            <ul class="pagination">
            <?php
            echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            $numbers = $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
            $numbers = preg_replace("#\<li class=\"active\"\>([0-9]+)\<\/li\>#", "<li class=\"active\"><a href=''>$1</a></li>",$numbers);
            echo $numbers;
            echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
            ?>
            </ul>
        </nav>
        </div>
<?php }?>
</div>
</div>
</div>
