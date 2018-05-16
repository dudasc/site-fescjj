<h3>Atletas filiados</h3>

<?php echo $this->Session->flash(); ?> 
  <table id="tab" class="table table-hover table-bordered table-striped">
    <thead>
    	<tr>
        	<th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Data de nascimento</th>
            <th>Cidade</th>
            <th>Status da filiação</th>
            <th>Visualizar</th>           
        </tr>
    </thead>
    <tbody>
    <?php 
		foreach($atletas as $item):
	?>
    	<tr>
        	<td><?php echo $item['Atleta']['nome'];?></td>
            <td><?php echo $item['Atleta']['cpf'];?></td>
            <td><?php echo $item['Atleta']['rg'];?></td>
            <td>
				<?php
					$data = date("d/m/Y", strtotime($item['Atleta']['data_nasc']));
			 		echo $data;
				?>
            </td>
            <td><?php echo $item['Atleta']['cidade'];?></td>
            <td><?php if($item['Atleta']['status'] == 1)echo '<span class="green">Efetivada</span>'; else echo '<span class="red">Pendente</span>'; ?></td>
            
            <td><?php echo $this->Html->link('Visualizar', array('controller' => 'atletas', 'action' => 'ver', $item['Atleta']['id']), array('alt' => 'Visualizar', 'title' => 'Visualizar'));?></td>
            
            
        </tr>
    <?php
		endforeach;
	?>
    </tbody>
    <tfoot>
    
    </tfoot>
  </table>
  
  
  <div id="paginacao">
	<?php
	echo $this->Paginator->prev('«', null, null, array('class' => 'desabilitado'));
	echo $this->Paginator->numbers(array('separator' => false));
    echo $this->Paginator->next('»', null, null, array('class' => 'desabilitado'));
    ?>
</div>

