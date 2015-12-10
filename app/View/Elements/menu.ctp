<ul>				
	<li>
<?php echo $this->Html->link('Início', array('controller' => 'pages', 'action' => 'home'), array('alt' => 'Página inicial', 'title' => 'Página inicial'));?>
    </li>			
    <li>
<?php echo $this -> Html -> link('A federação', array('controller' => 'pages', 'action' => 'federacao'), array('alt' => 'A federação', 'title' => 'A federação'));?>
    </li>
     <li>
<?php echo $this -> Html -> link('Filiação', array('controller' => 'filiacoes', 'action' => 'index'), array('alt' => 'Cadastro de atletas', 'title' => 'Cadastro de atletas'));?>
     </li>	   			
    <li>
<?php echo $this -> Html -> link('Notícias & Eventos', array('controller' => 'noticias', 'action' => 'index'), array('alt' => 'Notícias e eventos', 'title' => 'Notícias e eventos'));?>
    </li>	
    <li>
<?php echo $this -> Html -> link('Atletas', array('controller' => 'atletas', 'action' => 'index'), array('alt' => 'Atletas filiados', 'title' => 'Atletas filiados'));?>		
	</li>
    <li><?php echo $this -> Html -> link('Academias', array('controller' => 'academias', 'action' => 'index'), array('alt' => 'Academias', 'title' => 'Academias'));?>
    </li>	
	<li><?php echo $this->Html->link('Fotos', array('controller' => 'fotos', 'action' => 'index'), array('alt' => 'Fotos', 'title' => 'Fotos'));?></li>
    <li><?php echo $this->Html->link('Vídeos', array('controller' => 'videos', 'action' => 'index'), array('alt' => 'Vídeos', 'title' => 'Vídeos'));?></li>			
   	<li><?php echo $this->Html->link('Contato', array('controller' => 'contatos', 'action' => 'index'), array('alt' => 'Contatos', 'title' => 'Contatos'));?></li>   		 
</ul>
