<h1>Vídeos</h1>
<?php
if(empty($videos)){
	  echo "<p>Nenhuma vídeos cadastrado.</p>";
  }else{
	  ?>
<ul id="lista-videos">
<?php
	$i = 1;
 		foreach($videos as $item):
		if($i%2==0){
			echo '<li class="clearfix break">'.$item['Video']['cod_frame'];
		}else{
			echo '<li class="clearfix">'.$item['Video']['cod_frame'];
		}
 		$ndata = date("d/m/Y", strtotime($item['Video']['dt_cadastro'])); 
 		echo "<small>Postado em ".$ndata."</small>";
    	echo "<strong>".$item['Video']['descricao']."</strong>";
		echo "</li>";
 
 $i++;
 endforeach;
?>
  <ul>
  
  
  
  <div id="paginacao">
<?php
 

echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
echo $this->Paginator->numbers(array('separator' => false));
echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));


?>
</div>
 <?php }?>