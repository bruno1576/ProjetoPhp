<?php
if($_SESSION['logado']==1){
   
  

 header("Location:home"); 
}




if(isset($_SESSION['logado'])and $_SESSION['logado']==1){
   
    echo "acessei a area restrita";

  include("admhome.php");
}else{
    
     echo "vocÊ não tem permissão para acessar,faça o login";
      
        header("Location:loginareaadm"); 




  if($_POST){
        $email=$_POST['email'];
        $senha=$_POST['senha'];
   
        }
        if(empty($email) or empty($senha)){
        $class=("alert alert-error");
        $resultado="preencha todos os campos para enviar a mensagem ";
          $cod=FALSE;
    
        }else{
            $resultado="Campos preenchidos com sucesso ";
            echo "<h3>DADOS ENVIADOS COM SUCESSO!</h3>";
    
            $cod=TRUE;    
   
    
     if($cod==true){

    $email=$_POST['email'];
        $senha=$_POST['senha'];     
       
        $conn=conexaoDB();
    
   $sql = "SELECT * FROM login WHERE email = :email";
$stmt=$conn->prepare($sql);
$stmt->bindParam("email", $email);
$stmt->execute();
$conteudo=$stmt->fetch(PDO::FETCH_ASSOC);

if (password_verify($senha, $conteudo['senha'])) {
  
    $_SESSION['logado']=1;
          header("Location:admhome"); 
          
   // senha validou

   
  
} else {
  $_SESSION['logado']=0;

}
   
   
     }
     }


}







