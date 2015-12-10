<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>
		Painel de controle - 
		<?php echo $title_for_layout; ?>
	</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

   <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');
				echo $this->Html->css('normalize');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('painel');
		echo $this->html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>  

</head>
<body>
	<div id="pagina">
    	<header >
        	<span class="titulo">Administração do site: fjjo-sc.com.br</span>     
        </header> 
         
        <div id="conteudo">	
			<?php echo $this->Session->flash(); ?>
            <?php echo $this -> Session -> flash('auth'); ?>
            <p><strong>Acesso restrito.</strong> Informe seu login e senha para acessar a área restrita</p>
            <br>
			<?php echo $this->fetch('content'); ?>           
        </div>
        <footer>
        <p>Federação de Jiu-jitsu do Estado de Santa Catarina</p>
        </footer>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
