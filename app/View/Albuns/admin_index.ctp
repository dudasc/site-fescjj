<script>  
function confirmaExclusao() {  
   if (confirm("Tem certeza que deseja excluir o álbum e todas suas imagens?")) {  
      return true; 
   }  
   return false;
}  
</script> 
<h3>Álbuns de fotos</h3>

<?php echo $this -> Html -> link("Cadastrar álbum de fotos", array('controller' => 'albuns', 'action' => 'add', 'admin' => true)); ?>   
<br />
<br />
<?php echo $this->Session->flash(); ?>

  <table class="table table-hover table-bordered table-striped">
    <thead>
    	<tr>
        	<th>Código</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Gerenciar fotos</th>
            <th>Excluir</th>
           
        </tr>
    </thead>
    <tbody>
    <?php 
		foreach($albuns as $item):
	?>
    	<tr>
        	<td><?php echo $item['Album']['id'];?></td>
            <td>
				<?php
					$data = date("d/m/Y", strtotime($item['Album']['dt_cadastro']));
			 		echo $data;
				?>
            </td>
            <td><?php echo $item['Album']['descricao'];?></td>
            <td><?php echo $this->Html->link('Editar', array('controller' => 'albuns', 'action' => 'add', $item['Album']['id']), array('alt' => 'Editar', 'title' => 'Editar'));?></td>
             <td><?php echo $this->Html->link('Fotos do álbum', array('controller' => 'fotos', 'action' => 'add', 'admin' => true, $item['Album']['id']), array('alt' => 'Editar', 'title' => 'Editar'));?></td>
            <td><?php echo $this->Html->link('Excluir', array('controller' => 'albuns', 'action' => 'delete', $item['Album']['id']), array('alt' => 'Excluir', 'title' => 'Excluir', 'onclick' =>'return confirmaExclusao();'));?></td>
            
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
           /*echo $this->Paginator->options(array(
                'update' => '#tab',
                'escape' => false,
                //'buffer' => true,
                'evalScripts' => true,
                'before' => $this->Js->get('#carregando')->effect('fadeIn', array('buffer' => false)),
                'complete' => $this->Js->get('#carregando')->effect('fadeOut', array('buffer' => false)),        
            ));*/
            echo $this->Paginator->numbers();
            //echo $this->Js->writeBuffer(array('safe' => false));
        ?>
        </ul>
  </div>
