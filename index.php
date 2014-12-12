

<?php 
//$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//$path = str_replace("/","",$rota['path']);

?>



<form class="navbar-search" name="busca" id="busca" method="post" action="resultado">
                        <input class="form-control" placeholder="Buscar..." type="text" name="txtBusca" id="txtBusca">
                        <button type="submit" id="busca" name="busca" class="btn btn-success">Buscar</button>
                      </form>
<?php
   




    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

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
 
  

require_once('template/topo.php');
require_once('template/menu.php');
 include('config.php');
  include('conexaoDB.php');
  

Validarota();

require_once('template/rodape.php');

  
//print_r($clientes);
?>