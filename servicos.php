<?php   

require_once"conexaoDB.php";

$conn=conexaoDB();

$sql="select * from pagina where id='4'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

$conteudodapagina=$conteudo;
   
     ?>

<div class="span10"> <div class="well"> <h1><?php echo utf8_encode($conteudodapagina['titulo']);  ?> </h1> 
 
 <hr /> <p> <?php echo utf8_encode($conteudodapagina['conteudo']); ?> </p> <hr />	<button class="btn btn-primary btn-large">Clique aqui exemplo!</button> 
 </div> 
 </div>
