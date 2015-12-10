<h1>Notícias & eventos</h1>
	<?php
        if(empty($noticias)){
          echo "<p>Nenhuma notícia cadastrada.</p>";
        }else{
    ?>
<ul id="lista-noticias" class="horizontal">
	<?php
        $i = 1;
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
            if($i % 2 == 0){
                $li = '<li class="clearfix break">'.$img.$data. $titulo. $strong."</li>";			 	
            }else{
                $li = '<li class="clearfix">'.$img.$data. $titulo. $strong."</li>";		 	
            }
            echo $this->Html->link($li, array('controller'=>'noticias', 'action' => 'ver', 'id' => $item['Noticia']['id'], 'titulo' => Inflector::slug(strtolower($item['Noticia']['titulo']))), array('escape'=> false));
            $i++;
        endforeach;  
    ?>  
</ul>



<div id="paginacao">
	<?php
	/*
	echo $this->Paginator->options(array(
        'update' => '#tab',
		'escape' => false,
        'evalScripts' => false,
        'before' => $this->Js->get('#carregando')->effect('fadeIn', array('buffer' => false)),
        'complete' => $this->Js->get('#carregando')->effect('fadeOut', array('buffer' => false)),        
    ));
	*/
	
	
	echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers(array('separator' => false));
    echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));
    ?>
</div>
<?php }?>
