<div class="container-fluid bg-main bg-main-1">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Fotos</h1>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php 
				echo "<h2>".$fotos[0]['Album']['descricao']."</h2>";
				$data = date("d/m/Y", strtotime($fotos[0]['Album']['dt_cadastro']));   
				echo "<p><strong>Data: </strong>".$data."</p><br><br>";
			?>
		</div>

	<?php
        	
		        foreach($fotos as $item){
		        	
		        	echo '<div class="col-md-2 col-sm-4 col-xs-6" > ';
					$thumb =  $this->Html->image("uploads/fotos/small_".$item['Foto']['nome'], array('class' => 'img-thumbnail img-responsive', 'alt' =>'', 'title' => ''));
				
					$foto =  $this->webroot."img/uploads/fotos/".$item['Foto']['nome'];
					echo '<a href="'.$foto.'" class="lightview" 
			    	data-lightview-group="example"
		 			data-lightview-caption=""/>'.$thumb."</a>";

							
					echo '</div>';
				
			}
			?>
<div class="col-md-12">
<?php
	echo $this -> Html -> link('Voltar', array('controller' => 'fotos', 'action' => 'index'), 
				array('alt' => 'Fotos', 'title' => 'Fotos', 'class' => 'bt-voltar')); 
?>
    </div>
  
  </div>
  </div>