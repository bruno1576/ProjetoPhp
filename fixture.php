<?php
require_once"conexaoDB.php";
echo"#### EXECUTANDO FIXTURE ####\n";
$conn=conexaoDB();

echo"Removendo tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo" - ok\n";

echo"Criando tabela";
$conn->query("CREATE TABLE teste(
id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(50) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
echo" - ok\n";

echo"Inserindo dados";
for($x=0;$x<=9;$x++)
{
    $nome="Teste{$x}";

    $smt=$conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $smt->bindParam(":nome",$nome);
    $smt->execute();
}
echo " -ok\n";

echo "#### Conluido ####\n";


echo"Inserindo dados\n";

   // $nome="home";

//    $smt=$conn->prepare("INSERT INTO teste01 (conteudo) VALUE (:conteudo);");
 //   $smt->bindParam(":conteudo",$nome);
  // $smt->execute();

    echo "selecionando dados";



$sql="select * from teste01";
$stmt=$conn->prepare($sql);
$stmt->execute();
$clientes=$stmt->fetch(PDO::FETCH_ASSOC);

print_r($clientes);


$sql="select * from pagina where titulo='Pagina inicial'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$titulo=$stmt->fetch(PDO::FETCH_ASSOC);

$titulodapagina=$titulo;

echo $titulodapagina['titulo'];


 
?>

