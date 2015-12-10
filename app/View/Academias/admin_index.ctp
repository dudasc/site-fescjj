<h3>Academias</h3>

<?php echo $this -> Html -> link("Cadastrar academia", array('controller' => 'academias', 'action' => 'add', 'admin' => true)); ?>   
<br />
<br />
<?php echo $this->Session->flash(); ?>
<div id="tab">
  <table id="tab" class="table table-hover table-bordered table-striped">
    <thead>
    	<tr>
        	<th>Código</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Professor responsável</th>
            <th>Editar</th>
            <th>Excluir</th>
           
        </tr>
    </thead>
    <tbody>
    <?php 
		foreach($academias as $item):
	?>
    	<tr>
        	<td><?php echo $item['Academia']['id'];?></td>

            <td><?php echo $item['Academia']['nome'];?></td>
            <td><?php echo $item['Academia']['cidade'];?></td>
            <td><?php echo $item['Academia']['professor'];?></td>
            <td><?php echo $this->Html->link('Editar', array('controller' => 'academias', 'action' => 'add', $item['Academia']['id']), array('alt' => 'Editar', 'title' => 'Editar'));?></td>
            <td><?php echo $this->Html->link('Excluir', array('controller' => 'academias', 'action' => 'delete', $item['Academia']['id']), array('alt' => 'Excluir', 'title' => 'Excluir'),  "Tem certeza que deseja excluir a academia?");?></td>
            
        </tr>
    <?php
		endforeach;
	?>
    </tbody>
    <tfoot>
    
    </tfoot>
  </table>
  <!--
  <p id='carregando' style='display: none'>Carregando...</p> -->
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

