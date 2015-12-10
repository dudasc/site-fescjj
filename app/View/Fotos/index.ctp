<h1>Fotos</h1>

<?php
if(empty($albuns)){
	  echo "<p>Nenhum álbum cadastrado.</p>";
  }else{

 echo '<ul id="albuns">';
 $i = 1;
  foreach($albuns as $item){
	  $desc = $item['Album']['descricao'];
	    $foto =  $this->Html->image("uploads/fotos/small_".@$item['Foto'][0]['nome'], array('alt' =>$desc, 'title' => $desc));	
		
		 $data = date("d/m/Y", strtotime($item['Album']['dt_cadastro']));   
	    if($i==4){
			echo $this->Html->link('<li class="break">'.$foto."<p>".$desc."</p><p class='data'>".$data."</p></li>", 
							array('controller'=>'fotos', 'action' => 'ver', $item['Album']['id']), array('escape'=> false));
			$i=1;
		}
		else{
			echo $this->Html->link("<li>".$foto."<p>".$desc."</p><p class='data'>".$data."</p></li>", array('controller'=>'fotos', 'action' => 'ver',$item['Album']['id']), array('escape'=> false));
			$i++;
		}	
		
	  
  }
  echo "</ul>";
?>
  
<div id="paginacao">
<?php
	echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers(array('separator' => false));
	echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));
  
?>
</div>
  <?php }?>