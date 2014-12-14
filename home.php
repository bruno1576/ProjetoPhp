<?php   

$conteudodapagina=consultahome();
     ?>

<div class="span10"> <div class="well"> <h1> <?php echo utf8_encode( $conteudodapagina['titulo']);  ?> </h1> 
 
 <hr /> <p> <?php echo utf8_encode( $conteudodapagina['conteudo']); ?> </p> <hr />	
    <button class="btn btn-primary btn-large">Clique aqui exemplo!</button> 
 </div> 
 </div>
<?php
    

?>
