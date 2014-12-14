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


echo"#### EXECUTANDO FIXTURE tabela contato####\n";
$conn=conexaoDB();

echo"Removendo tabela";
$conn->query("DROP TABLE IF EXISTS paginacontato;");
echo" - ok\n";

echo"Criando tabela";
$conn->query("CREATE TABLE paginacontato(
id INT NOT NULL AUTO_INCREMENT,
   titulo VARCHAR(50) CHARACTER SET 'utf8' NULL,
    nome VARCHAR(50) CHARACTER SET 'utf8' NULL,
    email VARCHAR(50) CHARACTER SET 'utf8' NULL,
    assunto VARCHAR(50) CHARACTER SET 'utf8' NULL,
    mensagem VARCHAR(50) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
echo" - ok\n";

echo"Inserindo dados";



    $smt=$conn->prepare("INSERT INTO paginacontato (id, titulo, nome, email, assunto, mensagem) VALUES
(1, 'contato', 'Nome', 'E-Mail', 'Assunto', 'Mensagem');");
    $smt->execute();

echo "#### Conluido ####\n";







echo"#### EXECUTANDO FIXTURE tabela pagina ####\n";
$conn=conexaoDB();

echo"Removendo tabela";
$conn->query("DROP TABLE IF EXISTS pagina;");
echo" - ok\n";

echo"Criando tabela";
$conn->query("CREATE TABLE pagina(
id INT NOT NULL AUTO_INCREMENT,
   titulo VARCHAR(50) CHARACTER SET 'utf8' NULL,
    conteudo VARCHAR(500) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
echo" - ok\n";

echo"Inserindo dados";
$tituloservico= utf8_decode("serviços");
$textopagina= utf8_decode("Olá, Essa é a pagina Home do projeto, essa página tem como interesse testar a página inicial do projeto durante as aulas e os projetos.");
$textoprodutos= utf8_decode("Olá, essa é a produtos do projeto, aqui ficaram os possíveis produtos que poderão ser usados no projeto, embora inicialmente essa página sirva somente para interesses demonstrativos....");
$textoempresa= utf8_decode("Olá, essa é a pagina Empresa, aqui serão postadas as principais informações sobre a empresa, mas por enquanto servira somente como exemplo.");
$textoservico= utf8_decode("Essa é a página de serviços, aqui serão postados os principais serviços em questão da empresa, por enquanto ela é só uma página de exemplo.");


    $smt=$conn->prepare("INSERT INTO pagina (id, titulo, conteudo) VALUES
(1, 'pagina inicial', '$textopagina'),
(2, 'produtos', '$textoprodutos'),
(3, 'empresa', '$textoempresa'),
(4, '$tituloservico', '$textoservico');");
    $smt->execute();



echo "#### Conluido ####\n";





?>

