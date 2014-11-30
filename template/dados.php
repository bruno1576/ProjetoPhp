<div class="span10"> <div class="well"> <h1> Dados </h1> 
 <h1>DADOS ENVIADOS COM SUCESSO!</h1>
    <?php
        session_start();
$nome= $_SESSION['nome'];
$email= $_SESSION['email'];
$assunto= $_SESSION['assunto'];
$mensagem= $_SESSION['mensagem'];

echo "Nome:$nome <br>";
echo "Email:$nome <br>";
echo "Assunto:$nome <br>";
echo "Mensagem:$nome <br>";

    ?>
    

 </div> 
 </div>
