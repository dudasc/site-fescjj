<h1>Academias filiadas</h1>
<?php
	if(empty($academias)){
    	echo "<p>Nenhuma academia cadastrada.</p>";
    }else{
?>
<ul id="lista-academias">
<?php
	foreach ($academias as $item): 
    	if(empty($item['Academia']['foto'])){
        	$img = $this->Html->image('small_sem_img.jpg', array('alt' => $item['Academia']['nome'], 'title' => $item['Academia']['nome']));
        }else{
			$img_grande =  '../img/uploads/academias/'.$item['Academia']['foto'];  			         
			$img = $this->Html->link($this -> Html -> image('uploads/academias/small_'.$item['Academia']['foto']),$img_grande, array( "class"=>"fancybox", "data-fancybox-group"=>"button", 'title' => $item['Academia']['nome'], 'escape'=> false));	 				 
		}
		
		$nome = $this->Html->tag('strong', $item['Academia']['nome'], array('class' => 'titulo'));	
		$dados = $this->Html->tag('p', "<strong>Endereço: </strong>".$item['Academia']['endereco']. " <br><strong>Cidade: </strong>".
		$item['Academia']['cidade']."<br><strong>Telefone: </strong>".$item['Academia']['telefone']."<br><strong>Professor responsável: </strong>".$item['Academia']['professor']);						
		echo $this->Html->tag('li', $img.$nome.$dados, array('class' => 'clearfix')); 
	endforeach;  
    ?>  
</ul>
<div id="paginacao">
	<?php
	echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers(array('separator' => false));
    echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));
    ?>
</div>
<?php }?>