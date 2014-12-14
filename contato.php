

<?php   

$teste = camposdocontato();
     ?>
<div class="span10"> <div class="well"> 
 
    <h5> <?php echo $teste['titulo'];  ?> </h5> 
 

<div class="row">
  <div class="span12">


      <form class="form-horizontal" action='' method="POST" >
          <div id="legend">
           
          </div>
          <div class="">
             
         <?php enviacontato(); ?>
          </div>
          <div class="control-group">
              <label class="control-label" for="nome"><?php echo $teste['nome'];  ?> </label>
              <div class="controls">
                  <input type="text" id="nome" name="nome" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="email"><?php echo $teste['email'];  ?> </label>
              <div class="controls">
                  <input type="text" id="email" name="email" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="assunto"><?php echo $teste['assunto'];  ?></label>
              <div class="controls">
                  <input type="text" id="assunto" name="assunto" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="mensagem"><?php echo $teste['mensagem'];  ?></label>
              <div class="controls">
                  <textarea rows="5" name="mensagem"></textarea>
              </div>
          </div>
          <div class="control-group">
              <label class="control-label"></label>
              <div class="controls">
                  <button>Enviar Mensagem</button>

              </div>
          </div>
      </form>
  </div>
</div>

<hr />	
 </div> 
 </div>




