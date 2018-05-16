<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Painel administrativo - <?php echo $title_for_layout; ?>
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

	
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>  
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        
    <script type="text/javascript">

	$(document).ready(function() {

        tinymce.init({ 
            selector:'.tinymce',
            plugins: "link",
            menubar: false,       
            height: 400,

            toolbar: 'undo redo | bold italic underline | alignleft| numlist bullist | link'
          
            });
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
<nav class="navbar navbar-default navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
          Painel administrativo: FJJO-SC
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this -> html -> link("Sair", array('controller' => 'users', 'action' => 'logout'), array('escape' => false, 'id' => 'logout')); ?></li>li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
        <div class="row">
            <div class="col-md-3 esq">
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
            </div>
            <div class="col-md-9">
                <?php echo $this->fetch('content'); ?>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <p><strong>Copyright © FESCJJ - 2018</strong></p>        
            </div>
        </div>
    </div>
</body>
</html>
