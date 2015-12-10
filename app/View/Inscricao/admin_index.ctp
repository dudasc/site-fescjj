<h3>Inscrições catarinense</h3>
<?php echo $this->Session->flash(); ?>
<div id="tab">
  <table id="tab" class="table table-hover table-bordered table-striped">
    <thead>
    	<tr>
        	<th>Código</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Equipe</th>
            <th>Categoria</th>
            <th>Absoluto</th>
            <th>Peso</th>
            <th>Faixa</th>
            <th>Comprovante</th>          
        </tr>
    </thead>
    <tbody>
    <?php 
		foreach($inscricoes as $item):
	?>
    	<tr>
        	<td><?php echo $item['Inscricao']['id'];?></td>
            <td><?php echo $item['Inscricao']['nome'];?></td>
            <td>
				<?php
					$data = date("d/m/Y", strtotime($item['Inscricao']['data_nasc']));
			 		echo $data;
				?>
            </td>
            <td><?php echo $item['Inscricao']['equipe'];?></td>
            <td><?php echo $item['Inscricao']['categoria'];?></td>
            <td>
				<?php
					if($item['Inscricao']['absoluto'] == 1)
						echo "SIM";
					else
						echo "NÃO";
					
				?>
            </td>
            <td><?php echo $item['Inscricao']['peso'];?></td>
            <td><?php echo $item['Inscricao']['faixa'];?></td>                
       <td>
	   <?php
	   	$img = $item['Inscricao']['comprovante'];
		if($img == null){
			echo "SEM COMPROVANTE";
		}else{
			//$link = $foto =  "../img/uploads/comprovantes/".$item['Inscricao']['comprovante'];
			//$link =  $this->Html->image("uploads/comprovantes/".$item['Inscricao']['comprovante'], array('alt' =>'', 'title' => ''));
			echo '<a href="#myModal" role="button" data-toggle="modal">Visualizar</a>';
			
			$img =  $this->Html->image("uploads/comprovantes/".$item['Inscricao']['comprovante'], array('alt' =>'', 'title' => ''));
			
			
			echo '<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Comprovante</h3>
  </div>
  <div class="modal-body">
     '.$img.'
  </div>
  <div class="modal-footer">
    
  </div>
</div>';
			
			
		/*	echo '			
				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
					 <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Comprovante de deposito</h4>
      </div>
					  '.$img.'
					</div>
				  </div>
				</div>';			
				*/
		}

  ?>
  </td>
            <!--<td><?php // echo $this->Html->link('Efetivar', array('controller' => 'inscricoes', 'action' => 'efetivar', $item['Inscricao']['id']), array('alt' => 'Efetivar matrícula', 'title' => 'Efetivar matrícula', 'onclick' =>'return confirmaExclusao();'));?></td>
            -->
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
  echo $this->Paginator->prev('«', null, null, array('class' => 'disable'));
	echo $this->Paginator->numbers(/*array('separator' => false, 'tag' => 'li', 'class' => 'disabled')*/);
    echo $this->Paginator->next('»', null, null, array('class' => 'disable'));
    
?>
</ul>


</div>



