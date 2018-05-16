<div class="container-fluid bg-main bg-main-1">
	<div class="container">
		<div class="row">
			<h1>Fotos</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	


<?php
if(empty($albuns)){
	  echo '<div class="col-md-12"><p>Nenhum álbum cadastrado.</p></div>';
  }else{


 $i = 1;
  foreach($albuns as $item){
  	echo '<div class="col-md-3 col-xs-12 lista-albuns">';

	  $desc = $item['Album']['descricao'];
	    $foto =  $this->Html->image("uploads/fotos/small_".@$item['Foto'][0]['nome'], array('class' => 'img-thumbnail img-responsive','alt' =>$desc, 'title' => $desc));	
		
		 
			echo $this->Html->link($foto, array('controller'=>'fotos', 'action' => 'ver',$item['Album']['id']), array('escape'=> false));
	$data = date("d/m/Y", strtotime($item['Album']['dt_cadastro']));   
     echo "<p>".$desc."</p>";
    echo "<small>".$data."</small>";
		echo "</div>";
	  
  }

?>
  
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