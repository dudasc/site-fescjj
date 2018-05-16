<script>
    function confirmaExclusao() {
        if (confirm("Tem certeza que deseja cancelar sua filiação?")) {
            return true;
        }
        return false;
    }
</script> 
<div class="container-fluid bg-main bg-main-2">
    <div class="container">
        <div class="row">
            <h1>Filiações</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">       
            <h2>Formulário de filiação para atletas</h2>
            <?php echo $this -> Form -> create('Atleta', array('action' => 'delete', 'class' => 'form-delete-filiacao', 'onSubmit'=>"return confirmaExclusao()"));?>
            <?php echo $this->Form->input('id', array('label' => false, 'type' => 'hidden'));?>
            <?php  echo $this->Form->button('Desfazer filiação', array('tyoe' => 'submit', 'class' => 'btn btn-danger'));?>
            <?php  echo $this->Form->end()?>
            <br>
            <?php echo $this->Session->flash(); ?>

            <br>
            <div class="row">
                <div class="col-md-6">
                    <?php
                    echo $this -> Form -> create('Atleta', array('action' => 'editar', 'type' => 'file', 'enctype'=>"multipart/form-data"));
                    ?>

                    <div class="form-group">
                        <label for="inputNome">Nome completo</label>
                        <?php echo $this->Form->input('nome', array('label' => false, 'type' => 'text', 'id' =>"inputNome", 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group">
                        <label for="inputCpf">CPF</label>
                        <?php echo $this->Form->input('cpf', array('label' => false, 'type' => 'text', 'id' =>"inputCpf", 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group">
                        <label for="inputRg">RG</label>
                        <?php echo $this->Form->input('rg', array('label' => false, 'type' => 'text', 'id' =>"inputRg", 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">E-mail</label>
                        <?php echo $this->Form->input('email', array('label' => false, 'id' =>"inputEmail", 'class' => 'form-control'));?>   
                    </div>
                    <div class="form-group">
                        <label for="inputDataNascCidade">Data de nascimento</label>
                        <?php echo $this->Form->date('data_nasc', array('label' => false, 'id' =>"inputDataNasc", 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group">
                        <label for="inputCidade">Cidade</label>
                        <?php echo $this->Form->input('cidade', array('label' => false, 'class' => 'form-control', 'id' =>"inputCidade"));?>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="inputAcademia">Academia</label>
                        <?php echo $this->Form->input('academia', array('label' => false, 'id' =>"inputAcademia", 'class' => 'form-control' ));?>
                    </div>
                    <div class="form-group">
                        <label for="inputProfessor">Professor</label>
                        <?php echo $this->Form->input('professor', array('label' => false, 'id' =>"inputProfessor", 'class' => 'form-control'));?>
                    </div>
                    <div class="form-group">
                        <label for="inputCategoria">Categoria</label>
                        <?php echo $this->Form->input('categoria', array('label'=>false, 'class' => 'form-control', 'id' =>"inputCategoria", 'options' => 
                        array( '' => 'Selecione...', 
                        'galo' => 'Galo', 
                        'pluma' => 'Pluma', 
                        'leve' => 'Leve',
                        'médio' => 'Médio',
                        'meio pesado' => 'Meio pesado', 
                        'pesado' => 'Pesado',
                        'super pesado' => 'Super pesado',
                        'pesadíssimo' => 'Pesadíssimo',
                        'absoluto' => 'Absoluto')));?>   
                    </div>
                    <div class="form-group">       
                        <label for="inputFaixa">Faixa</label>
                        <?php echo $this->Form->input('faixa', array('label'=>false, 'class' => 'form-control', 'id' =>"inputFaixa", 'options' => 
                        array( '' => 'Selecione...', 
                        'branca' => 'Branca', 
                        'cinza' => 'Cinza', 
                        'amarela' => 'Amarela',
                        'laranja' => 'Laranja',
                        'verde' => 'Verde', 
                        'azul' => 'Azul',
                        'roxa' => 'Roxa',
                        'marrom' => 'Marrom',
                        'preta' => 'Preta',)));?> 
                    </div>  
                    <div class="form-group">
                        <label for="inputPeso">Peso</label>
                        <?php echo $this->Form->input('peso', array('label' => false, 'id' =>"inputPeso", 'class' => 'form-control'));?>
                    </div>                       

                    <div class="form-group">
                        <label for="inputFoto">Foto</label>    
                        <?php echo @$this->Form->file('foto', array('label' => false, 'id' =>"inputFoto", 'required' => false));?>                
                    </div>
                    <div class="form-group">
                        <?php
                        if(empty($this->data['Atleta']['foto'])){
                        echo $this -> Html -> image('sem_img_f.jpg', array("class"=> "foto-atleta", "alt" => $this->data['Atleta']['nome']));
                        }else{
                        echo  $this -> Html -> image('uploads/atletas/small_'.$this->data['Atleta']['foto'], array("class"=> "img-thumbnail foto-atleta", "alt" => $this->data['Atleta']['nome']));
                        }?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $this->Form->submit('Confirmar dados', array('class' => 'btn btn-default'));?>
                    <?php  echo $this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>



