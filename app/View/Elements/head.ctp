<meta charset="UTF-8" />

<title>FESCJJ - Federação do estado de Santa Catarina de jiu-jtsu</title>
<meta name="description" content="Site oficial da federação do estado de Santa Catarina de jiu-jtsu. Acompanhe aqui as novidades e informações sobre o jiu-jitsu no estado.">
<meta name="keywords" content="federação, federação catarinense,jiu-jitsu, jiu jitsu, mma, artes marciais"> 
<meta name="author" content="Eduardo Soprana Coelho"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta property="og:url" content="<?php // echo $url?>"> 
<meta property="og:title" content="<?php //echo $cakeDescription;
echo $this->fetch('title'); ?>">

<meta property="og:site_name" content="FESCJJ"> 
<meta property="og:description" content="Descricao noticia">
<meta property='og:image' content='http://www.limamoveissobmedida.com.br/img/face.png' />
<!-- fim metatags facebook-->

<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
echo $this->Html->meta('icon');
echo $this->Html->css('capa');



echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
echo $this->Html->css('lightview');
//echo $this->Html->css('jquery.fancybox');
//echo $this->Html->css('jquery.fancybox-buttons');
//echo $this->Html->css('flexslider');
//echo $this->Html->script('jquery.flexslider');	
echo $this->Html->script('lightview');	
//echo $this->Html->script('jquery.fancybox');
//echo $this->Html->script('jquery.fancybox-buttons');	
//echo $this->Html->script('jquery.maskedinput');	
?>  

<script type="text/javascript">			 
	$(document).ready(function() {		
		$('.flexslider').flexslider({
			animation: "slide"
		});		
		$(".fancybox").fancybox({
			padding: 0,
			closeEffect : 'elastic',
			closeSpeed  : 300,
			closeClick : true,
		});				
	})
</script>
