<?php
require_once"conexaoDB.php";
$busca=$_POST['txtBusca'];
$conn=conexaoDB();

$sql="select * from pagina where conteudo LIKE '%".$busca."%'";

$stmt=$conn->prepare($sql);
$stmt->execute();


$row=$stmt->fetchall(PDO::FETCH_ASSOC);


?>

        <div class="span10"> <div class="well"> <h1>resultado da pesquisa  </h1> 
 
 <hr /> <p>

        <?php
foreach($row as $resultados){
   
$url=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT',utf8_encode($resultados['titulo'])) );

    echo "<a href=".$url.">".utf8_encode($resultados['titulo'])."</a>"."<br>";
  
}

?>
        
 
        
         
        
         
        
        </p> <hr />	<button class="btn btn-primary btn-large">Clique aqui exemplo!</button> 
 </div> 
 </div>

        
