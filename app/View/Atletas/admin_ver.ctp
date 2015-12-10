<h3>Atletas filiados</h3>

<?php echo $this->Session->flash(); ?> 
<br>

<?php

if(empty($this->data['Atleta']['foto'])){
					echo $this -> Html -> image('sem_img_f.jpg', array("class"=> "foto-atleta", "alt" => $this->data['Atleta']['nome']));
				}else{
					echo  $this -> Html -> image('uploads/atletas/small_'.$this->data['Atleta']['foto'], array("class"=> "foto-atleta", "alt" => $this->data['Atleta']['nome']));
					
				}	
				echo '<div id="dados-atleta">';

echo '<strong class="nome">'.$this->data['Atleta']['nome']."</strong>";
echo "<p>";
echo "<strong>Status da filiação: </strong>";

if($this->data['Atleta']['status'] == 0){
	echo '<span class="red">PENDENTE</span>';
}else{
	echo '<span class="green">FILIAÇÃO CONFIRMADA</span>';
}


echo "<br><strong>CPF: </strong>".$this->data['Atleta']['cpf']."<br>";
echo "<strong>RG: </strong>".$this->data['Atleta']['rg']."<br>";
echo "<strong>E-mail: </strong>".$this->data['Atleta']['email']."<br>";


$data = date("d/m/Y", strtotime($this->data['Atleta']['data_nasc']));
			 		
echo "<strong>Data de nascimento: </strong>".$data."<br>";
echo "<strong>Cidade: </strong>".$this->data['Atleta']['cidade']."<br>";
echo "<strong>Nome da academia: </strong>".$this->data['Atleta']['academia']."<br>";
echo "<strong>Professor: </strong>".$this->data['Atleta']['professor']."<br>";
echo "<strong>Categoria: </strong>".$this->data['Atleta']['categoria']."<br>";
echo "<strong>Faixa: </strong>".$this->data['Atleta']['faixa']."<br>";
echo "<strong>Peso: </strong>".$this->data['Atleta']['peso'];
echo '</p>';

if($this->data['Atleta']['status'] == 0){
echo $this -> Form -> create('Atleta', array('action' => 'efetivar_filiacao'), array('admin' => true));
echo $this->Form->input('id', array('label' => false, 'type' => 'hidden'));
echo $this->Form->submit('Efetivar filiação', array('class' => 'btn btn-primary'));
}
echo '</form></div>';
 ?>
