<?php 
 include('functions/funcoes.php');
 
 ?>

 <?php
         session_start();
   botaologout();
                       
                        
                      
                      ?>

<form class="navbar-search" name="busca" id="busca" method="post" action="resultado">
                        <input class="form-control" placeholder="Buscar..." type="text" name="txtBusca" id="txtBusca">
                        <button type="submit" id="busca" name="busca" class="btn btn-success">Buscar</button>
                      </form>
 


<?php
 

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];   
    
    require_once('template/topo.php');
    require_once('template/menu.php');
    include('functions/config.php');
    include('functions/conexaoDB.php');
  

    Validarota();

    require_once('template/rodape.php');


?>
  