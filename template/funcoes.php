<?php
 
function Validarota(){


   $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

   $path = str_replace("/","",$rota['path']);

   $rotasValidas = array("home"=>1,"contato"=>2,"empresa"=>3,"produtos"=>4,"servicos"=>5,"resultado"=>6);  

   $arquivo = $path . ".php";
   $urllimpa=str_replace("/","",$_SERVER['REQUEST_URI']); 

 
  
    if  ($urllimpa==""){


    require_once('home.php');
     
                          }

    elseif  (array_key_exists($path, $rotasValidas))
     {
         
   require_once($arquivo);
  
   
     }
      else{
   
 header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
  
    exit();
     
           }
               }





               function enviacontato(){
if($_POST){
$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
}
if(empty($nome) or empty($nome)or empty($assunto)or empty($mensagem)){
$class=("alert alert-error");
$resultado="preencha todos os campos para enviar a mensagem ";
  $cod=FALSE;

}else{
    $resultado="Campos preenchidos com sucesso ";
    echo "<h3>DADOS ENVIADOS COM SUCESSO!</h3>";

    $cod=TRUE;


}

 if($cod==true){
     echo "<h5>Seus dados que foram enviados!:";
 echo "<h5>Nome: " . $_POST['nome'] . " <br>";
echo "Email: " . $_POST['email'] . " <br>";
echo "Assunto: " . $_POST['assunto'] . " <br>";
echo "Mensagem: " . $_POST['mensagem'] . " <br>";
 }
 print $resultado;
    }








    function camposdocontato(){
$conn=conexaoDB();

$sql="select * from paginacontato ";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

 $conteudodapagina=$conteudo;
 
 return $conteudodapagina;

}

function consultaempresa(){

$conn=conexaoDB();
$sql="select * from pagina where titulo='Empresa'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);
$conteudodapagina=$conteudo;
return $conteudodapagina;
}
function consultahome(){

$conn=conexaoDB();

$sql="select * from pagina where titulo='Pagina inicial'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

$conteudodapagina=$conteudo;
return $conteudodapagina;
}
function consultaproduto(){
$conn=conexaoDB();

$sql="select * from pagina where titulo='Produtos'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

$conteudodapagina=$conteudo;
return $conteudodapagina;
}

function consultaresultado(){

$busca=$_POST['txtBusca'];
$conn=conexaoDB();

$sql="select * from pagina where conteudo LIKE '%".$busca."%'";

$stmt=$conn->prepare($sql);
$stmt->execute();


$row=$stmt->fetchall(PDO::FETCH_ASSOC);
return $row;
}

function consultaservicos(){

$conn=conexaoDB();

$sql="select * from pagina where id='4'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

$conteudodapagina=$conteudo;
return $conteudodapagina;
}
?>

