<h3>Dados pessoais</h3>
<p>

<strong>Nome: </strong><?php  echo $usuario['User']['username']?><br />
<strong>Senha: </strong>******

</p>
<p>
	<?php echo $this -> Html -> link("Clique aqui", array('controller' => 'users', 'action' => 'edit', 'admin' => true)); ?>
	para alterar seus dados.
</p>

