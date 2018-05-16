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

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<?php
		echo $this->Html->meta('icon');
				
		echo $this->Html->css('painel');
		echo $this->html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>  

</head>
<body>
	<div class="container">
    	<header>
    		<div class="row">
    			<div class="col-md-12 header">
        			<h2><strong>Administração do site: fescjjbr</strong></h2>
        			</span>
        		</div>     
        	</div>
        </header> 
       
        <div class="row">	
        	<div class="col-md-12">
        		<p><strong>Acesso restrito.</strong> Informe seu login e senha para acessar a área restrita</p>
        		<?php echo $this->Session->flash(); ?>
	            <?php echo $this -> Session -> flash('auth'); ?>
        	</div>
        	<div class="col-md-4">
				<?php echo $this->fetch('content'); ?>  
			</div>         
        </div>
        <footer>
        	<div class="row">
        		<div class="col-md-12">
                <br>
        			<p><strong>Copyright © FESCJJ - 2018</strong></p>
        		</div>
        	</div>
        </footer>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
