<script>  
$('#tab').val(null);
function confirmaExclusao() {  
   if (confirm("Tem certeza que deseja excluir a notícia?")) {  
      return true; 
   }  
   return false;
}  
</script> 
<h3>Notícias</h3>

<?php echo $this -> Html -> link("Cadastrar notícia", array('controller' => 'noticias', 'action' => 'add', 'admin' => true)); ?>   
<br />
<br />
<?php echo $this->Session->flash(); ?>

  <table id="tab" class="table table-hover table-bordered table-striped">
    <thead>
    	<tr>
        	<th>Código</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
           
        </tr>
    </thead>
    <tbody>
    <?php 
		foreach($noticias as $item):
	?>
    	<tr>
        	<td><?php echo $item['Noticia']['id'];?></td>
            <td>
				<?php
					$data = date("d/m/Y", strtotime($item['Noticia']['data']));
			 		echo $data;
				?>
            </td>
            <td><?php echo $item['Noticia']['titulo'];?></td>
            <td><?php echo $this->Html->link('Editar', array('controller' => 'noticias', 'action' => 'add', $item['Noticia']['id']), array('alt' => 'Editar', 'title' => 'Editar'));?></td>
            <td><?php echo $this->Html->link('Excluir', array('controller' => 'noticias', 'action' => 'delete', $item['Noticia']['id']), array('alt' => 'Excluir', 'title' => 'Excluir', 'onclick' =>'return confirmaExclusao();'));?></td>
            
        </tr>
    <?php
		endforeach;
	?>
    </tbody>
    <tfoot>
    
    </tfoot>
  </table>

  <div class="pagination">
  <ul>
  <?php
  //echo $this->Paginator->prev('«', null, null, array('class' => 'disable'));
	echo $this->Paginator->numbers(/*array('separator' => false, 'tag' => 'li', 'class' => 'disabled')*/);
    //echo $this->Paginator->next('»', null, null, array('class' => 'disable'));
    
?>
</ul>
</div>



