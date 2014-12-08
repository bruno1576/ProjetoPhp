<?php
    
try{
    
    $conexao= new \PDO("mysql:hots=201.76.32.112;dbname=testes","testes","axl33041929");
}
catch(\PDOExceltion $e){
    
    die("erro código:".$e->getCode().": ".$e->getMessage());

}

?>