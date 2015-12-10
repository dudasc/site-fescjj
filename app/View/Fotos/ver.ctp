<h1>Fotos</h1>
<?php 
	echo "<p><strong>Galeria de fotos: </strong>".$fotos[0]['Album']['descricao']."<br>";
	$data = date("d/m/Y", strtotime($fotos[0]['Album']['dt_cadastro']));   
	echo "<strong>Data: </strong>".$data."</p>";
?>
<ul class="fotos" > 
	<?php
		$i= 1;
        foreach($fotos as $item){
			$thumb =  $this->Html->image("uploads/fotos/small_".$item['Foto']['nome'], array('alt' =>'', 'title' => ''));
			$foto =  "../../img/uploads/fotos/".$item['Foto']['nome'];
			if($i==4){
		 		echo '<li class="break"><a href="'.$foto.'" class="fancybox" data-fancybox-group="button"/>'.$thumb."</a></li>";
		 		$i=1;
		 	}else{
				echo '<li><a href="'.$foto.'" class="fancybox" data-fancybox-group="button"/>'.$thumb."</a></li>";
				$i++;
			}
		}       
	?>
</ul>
<?php
	echo $this -> Html -> link('Voltar', array('controller' => 'fotos', 'action' => 'index'), 
				array('alt' => 'Fotos', 'title' => 'Fotos', 'class' => 'bt-voltar')); 
?>
    
  