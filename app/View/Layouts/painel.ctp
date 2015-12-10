<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>
		Painel administrativo - <?php echo $title_for_layout; ?>
	</title>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
   <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('painel');
		echo $this->Html->css('jquery-te-1.4.0');
		echo $this->html->script('bootstrap');
		echo $this->html->script('jquery-te-1.4.0');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>  
    <script type="text/javascript">
	$(document).ready(function() {
	$("textarea.jqte").jqte({
		 "source":false,
		 'fsize': false,
		 'formats': false,
		 'sub': false,
		 'sup': false,
		});
	})
	</script>
</head>
<body>
	<div id="pagina">
    	<header >
        	<span class="titulo">Painel administrativo: FJJO-SC</span>  
            <?php echo $this -> html -> link("Sair", array('controller' => 'users', 'action' => 'logout'), array('escape' => false, 'id' => 'logout')); ?>        </header>        
        <div id="conteudo" class="clearfix">
        	<nav>
				<li class="nav-header">Menu de navegação</li>
                <ul class="nav nav-list">
                    <li>
                        <?php echo $this -> html -> link("Página inicial", array('controller' => 'pages', 'action' => 'index', 'admin' => true), 
                            array('escape' => false)); ?>    
                    </li>
                    <li>
                        <?php echo $this -> html -> link("Notícias", array('controller' => 'noticias', 
                       'action' => 'index'), array('escape' => false)); ?>
                    </li> 
                     <li>
                        <?php echo $this -> html -> link("Academias", array('controller' => 'academias', 
                       'action' => 'index'), array('escape' => false)); ?>
                    </li>                        
                    <li> 
                        <?php echo $this -> html -> link("Fotos", array('controller' => 'albuns', 
                            'action' => 'index'), array('escape' => false)); ?>
                    </li>
                    <li> 
                        <?php echo $this -> html -> link("Vídeos", array('controller' => 'videos', 
                        'action' => 'index'), array('escape' => false)); ?></li>
                    <li> 
                        <?php echo $this -> html -> link("Atletas filiados", array('controller' => 'atletas', 
                        'action' => 'index'), array('escape' => false)); ?></li>
                                        
                    <li> 
                        <?php echo $this -> html -> link("Dados pessoais", array('controller' => 'users', 'action' => 'index', 'admin' => true), 
                            array('escape' => false)); ?>    
                    </li>
                    <li> 
                        <?php echo $this -> html -> link("Inscrições catarinense", array('controller' => 'inscricoes', 'action' => 'index', 'admin' => true), 
                            array('escape' => false)); ?>    
                    </li>
                </ul>	
            </nav>
			<section id="principal">
        		<?php echo $this->fetch('content'); ?>        
            </section>
        </div>
        <footer>
        	<p>Federação de Jiu-jitsu do Estado de Santa Catarina</p>
        </footer>
	</div>
	<?php  //echo $this->element('sql_dump'); ?>
</body>
</html>
