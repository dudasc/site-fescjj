<footer>
    <div class="container-fluid footer a">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <p>Rua Durval Oliveira Souza, 64 <br>Centro, Balneário Arroio do Silva/SC<br>
                        CEP: 88914-000</p>
                </div>
                <div class="col-md-4 col-xs-12">            
                   <p> <?= $this->Form->create('Newsletter', array('action' => 'index', 'class' => 'form-inline'));?>
<?= $this -> Form -> label('Newsletter');?>  </p>
                        
                                    <div class="form-group">
                        
                        <?php echo $this -> Form -> input('email', array('label' => false, 'type' => 'email', 'placeholder' => 'Digite seu e-mail', 'class' => 'form-control'));?>    
                    </div>
                    <?php echo $this ->Form->Button("Enviar", array('type'=> 'submit', 'class' =>'btn btn-default'));?>   
                    <?php echo $this -> Form -> end();?>       
                </div>           
            </div>
        </div>
    </div>
    <div class="container-fluid footer b">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <p>© 2014 - Federação de jiu-jitsu do estado de Santa Catarina</p>
                </div>
            </div>
        </div>
    </div>
</footer>