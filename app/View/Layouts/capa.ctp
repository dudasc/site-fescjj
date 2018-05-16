<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php echo $this->element('head'); ?>
  </head>    
  <body>
    <?php echo $this->element('header'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('footer'); ?>
  </body>
</html>

  <!--
	<div class="container">
    	<header class="row">
             <nav id="menu">
                <?php //echo $this -> element('menu');?>
            
              <!--<div id="form-busca">
                            <?php // echo $this -> Form -> create('Busca');?>                    
                           <?php // echo $this -> Form -> input('palavra', array('label' => false, 'type' => 'text', 'placeholder' => 'Pesquisar...')); ?>                        <?php //echo $this -> Form -> //end("");?>                    
                            <?php //echo $this -> Session -> flash();?>
                        </div>
                        -->

                        <!--
             </nav>
             <div id="logo">
                    <a href="../" alt="FJJO-SC" title="FJJO-SC"><?php // echo $this -> Html -> image('logo3.png', array("alt" => ""));?></a>
             </div>             
             <span id="titulo">FEDERAÇÃO DO ESTADO DE SANTA CATARINA</span>           
        </header> 
        </div>      
        <section id="conteudo" class="clearfix" >	
			<?php //echo $this->Session->flash();?>
			<?php //echo $this->fetch('content');?>
           <br>
        </section>        
	</div>
    <footer class="clearfix">
    	<div id="conteudo-rodape" class="clearfix">
            <div id="rodape-esq">
              <p>Rua Durval Oliveira Souza, 64 <br>CEP: 88914-000 - Centro, Balneário Arroio do Silva/SC<br><br>© 2014 - Federação catarinense de jiu-jitsu</p>
            </div>
            <div id="rodape-dir">
            	<div id="form-newsletter">
					<?php //echo $this -> Form -> create('Newsletter', array('action' => 'index'), array());?>  
                    <?php echo $this -> Form -> label('Newsletter');?>  
                    <p>Receba as novidades em seu e-mail</p>                
                    <?php echo $this -> Form -> input('email', array('label' => false, 'type' => 'email', 'placeholder' => 'Digite seu e-mail'));?>                    <?php echo $this -> Form -> end("Enviar");?>                    
                    <?php echo $this -> Session -> flash();?>
            	</div>
            </div>
           
        </div>
    </footer>
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51823894-1', 'fescjj.com.br');
  ga('send', 'pageview');

</script>
    
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>