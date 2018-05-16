<div class="container-fluid bg-main bg-main-1">
	<div class="container">
		<div class="row">
			<h1>Vídeos</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	<?php
		if(empty($videos)){
		  echo '<div class="col-md-12"><p>Nenhuma vídeos cadastrado.</p></div>';
	  }else{
	  	foreach($videos as $item):?>
 		<div class="col-md-4 col-sm-6 lista-videos">
			<?php		
				echo $item['Video']['cod_frame'];
		
	 			$ndata = date("d/m/Y", strtotime($item['Video']['dt_cadastro'])); 
	 			echo "<p>".$item['Video']['descricao']."</p>";
	 			echo "<small>Postado em ".$ndata."</small>";
	    	?>
	 	</div>
 		<?php endforeach;?>
  
  		<div class="col-md-12">
    		<nav>
	            <ul class="pagination">
	            <?php
	            echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
	            $numbers = $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
	            $numbers = preg_replace("#\<li class=\"active\"\>([0-9]+)\<\/li\>#", "<li class=\"active\"><a href=''>$1</a></li>",$numbers);
	            echo $numbers;
	            echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
	            ?>
            	</ul>
  	    	</nav>
        </div>
   	<?php }?>
	</div>
</div>
