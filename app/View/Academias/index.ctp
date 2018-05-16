<div class="container-fluid bg-main bg-main-1">
	<div class="container">
		<div class="row">
			<h1>Academias filiadas</h1>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
	


<?php
	if(empty($academias)){
    	echo "<div class='col-md-12>'<p>Nenhuma academias cadastrada.</p></div>";
    }else{
?>

<div class="col-md-12">
<h2>Filie sua academia</h2>
<p>Para efetuar a filiação de sua academia na FESCJJ acesse o menu 
	<?php
		echo $this->Html->link('filiações', array('controller' => 'filiacoes', 'action' => 'index'), array('alt' => 'Cadastr de atleta', 'title' => 'Cadastro de atleta'));
	?>

	e veja os procedimentos para agremiação.
</div>

<?php
	foreach ($academias as $item): 
	echo '<div class="col-md-12 lista-academias">';

    	if(empty($item['Academia']['foto'])){
        	$img = $this->Html->image('small_sem_img.jpg', array('alt' => $item['Academia']['nome'], 'title' => $item['Academia']['nome'], 'class' => 'img-thumbnail img-academia'));
        }else{
			$img_grande =  '../img/uploads/academias/'.$item['Academia']['foto'];  			         
			$img = $this->Html->link($this -> Html -> image('uploads/academias/small_'.$item['Academia']['foto']),$img_grande, array( "class"=>"img-thumbnail img-academia fancybox", "data-fancybox-group"=>"button", 'title' => $item['Academia']['nome'], 'escape'=> false));	 				 
		}
		
		$nome = $this->Html->tag('span', $item['Academia']['nome'], array('class' => 'nome-academia'));	
		$dados = $this->Html->tag('span', "<strong>Endereço: </strong>".$item['Academia']['endereco']. " <br><strong>Cidade: </strong>".
		$item['Academia']['cidade']."<br><strong>Telefone: </strong>".$item['Academia']['telefone']."<br><strong>Professor responsável: </strong>".$item['Academia']['professor']);						
		echo $img;

		echo '<div class="dados-academia">'.$nome."<p>".$dados."</p></div>"; 
		echo '</div>';
	endforeach;  
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
