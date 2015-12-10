<h1>Atletas filiados</h1>

<div id="form-busca-atleta">

	<?php echo $this -> Form -> create('Atleta', array('action' => 'index'));?>                    
    <?php echo $this -> Form -> search('nome', array('label' => false,  'placeholder' => 'Digite um nome...')); ?>                        
	<?php echo $this -> Form -> end("Pesquisar");?>                    
</div>  
             
<p><strong>Filtrar por letra:  </strong>
     
       <?php echo $this -> Html -> link('A', array('controller' => 'atletas', 'action' => 'index', 'a'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('B', array('controller' => 'atletas', 'action' => 'index', 'b'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('C', array('controller' => 'atletas', 'action' => 'index', 'c'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('D', array('controller' => 'atletas', 'action' => 'index', 'd'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('E', array('controller' => 'atletas', 'action' => 'index', 'e'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('F', array('controller' => 'atletas', 'action' => 'index', 'f'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('G', array('controller' => 'atletas', 'action' => 'index', 'g'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('H', array('controller' => 'atletas', 'action' => 'index', 'h'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('I', array('controller' => 'atletas', 'action' => 'index', 'i'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('J', array('controller' => 'atletas', 'action' => 'index', 'j'), array('class' => 'letra'));?>
	   <?php echo $this -> Html -> link('K', array('controller' => 'atletas', 'accion' => 'index', 'k'), array('class' => 'letra'));?>
	   <?php echo $this -> Html -> link('L', array('controller' => 'atletas', 'action' => 'index', 'l'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('M', array('controller' => 'atletas', 'action' => 'index', 'm'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('N', array('controller' => 'atletas', 'action' => 'index', 'n'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('O', array('controller' => 'atletas', 'action' => 'index', 'o'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('P', array('controller' => 'atletas', 'action' => 'index', 'p'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('Q', array('controller' => 'atletas', 'action' => 'index', 'q'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('R', array('controller' => 'atletas', 'action' => 'index', 'r'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('S', array('controller' => 'atletas', 'action' => 'index', 's'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('T', array('controller' => 'atletas', 'action' => 'index', 't'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('U', array('controller' => 'atletas', 'action' => 'index', 'u'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('V', array('controller' => 'atletas', 'action' => 'index', 'v'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('W', array('controller' => 'atletas', 'action' => 'index', 'w'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('X', array('controller' => 'atletas', 'action' => 'index', 'x'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('Y', array('controller' => 'atletas', 'action' => 'index', 'y'), array('class' => 'letra'));?>
       <?php echo $this -> Html -> link('Z', array('controller' => 'atletas', 'action' => 'index', 'z'), array('class' => 'letra'));?>
  

</p>

<p>Se você ja é um atleta filiado na FJJOSC <?php echo $this -> Html -> link('clique aqui', array('controller' => 'atletas', 'action' => 'valida'), array('class' => 'alterar'));?> para alterar seus dados.</p>
<?php echo $this -> Session -> flash();?>
<?php
	if(empty($atletas)){
    	echo "<p>Nenhum resultado encontrado.</p>";
	}else{
?>
<ul id="lista-atletas">
<?php
	foreach($atletas as $item){?>
    	<li class="clearfix">
			<?php 
				if(empty($item['Atleta']['foto'])){
					echo $this -> Html -> image('sem_img_f.jpg', array("alt" => $item['Atleta']['nome'], 'class' => 'img-atleta'));
				}else{
					$thumb =  $this -> Html -> image('uploads/atletas/small_'.$item['Atleta']['foto'], array("alt" => $item['Atleta']['nome'], 'class' => 'img-atleta'));
					$foto =  $this->webroot."img/uploads/atletas/".$item['Atleta']['foto'];
					echo '<a href="'.$foto.'" class="fancybox" data-fancybox-group="button" alt="" title=""/>'.$thumb."</a>";
				}		
            ?>
            <strong class="nome"> <?php echo $item['Atleta']['nome']?></strong> <br>
            <?php
			if($item['Atleta']['faixa'] == 'branca'){
				echo $this -> Html -> image('fbranca.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'cinza'){
				echo $this -> Html -> image('fcinza.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'amarela'){
				echo $this -> Html -> image('famarela.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'laranja'){
				echo $this -> Html -> image('flaranja.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'verde'){
				echo $this -> Html -> image('fverde.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'azul'){
				echo $this -> Html -> image('fazul.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'roxa'){
				echo $this -> Html -> image('froxa.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'marrom'){
				echo $this -> Html -> image('fmarrom.png', array("alt" => ''));
			}else if($item['Atleta']['faixa'] == 'preta'){
				echo $this -> Html -> image('fpreta.png', array("alt" => ''));
			}
            
			?>
            <p>      
            <strong>Idade: </strong><?php echo  $this->requestAction(array('action' => 'calculaIdade', $item['Atleta']['data_nasc']))?> anos<br>  
            <strong>Categoria: </strong> <?php echo $item['Atleta']['categoria']?><br>               
            <strong>Peso: </strong> <?php echo $item['Atleta']['peso']?><br>            
            <strong>Cidade: </strong> <?php echo $item['Atleta']['cidade']?><br>
            <strong>Academia: </strong> <?php echo $item['Atleta']['academia']?><br><strong> Professor: </strong><?php echo $item['Atleta']['professor']?></p>	
		</li>
<?php }?>
</ul>

<div id="paginacao">
	<?php
	echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers(array('separator' => false));
    echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));
    ?>
</div>

<?php }?>