<?php
if($_POST){
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

}

$redirecionar='index.php';

if(empty($nome) or empty($nome)or empty($assunto)or empty($mensagem)){
$class=("alert alert-error");
$resultado="preencha todos os campos para enviar a mensagem ";
}else{

    header("Location: $redirecionar");
$resultado="mensagem enviada!";
$class=("alert alert-success");
}



?>


<div class="span10"> <div class="well"> <h1> Contato </h1> 
 

<div class="row">
  <div class="span12">
      <form class="form-horizontal" action='' method="POST">
          <div id="legend">
              <legend class=""><h1>Fale Conosco</h1></legend>
          </div>
          <div class="<?php print $class; ?>">
              <button type="button" class="close" data-dismiss="alert">×</button>
         <?php print $resultado; ?>
          </div>
          <div class="control-group">
              <label class="control-label" for="nome">Nome:</label>
              <div class="controls">
                  <input type="text" id="nome" name="nome" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="email">E-mail:</label>
              <div class="controls">
                  <input type="text" id="email" name="email" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="assunto">Assunto:</label>
              <div class="controls">
                  <input type="text" id="assunto" name="assunto" class="input-xlarge">
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="mensagem">Mensagem:</label>
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

