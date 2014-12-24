<?php
            

if($_SESSION['logado']!=1){
   
  

 header("Location:areaadm"); 
}



  include('admin/contato.php');
  ?>