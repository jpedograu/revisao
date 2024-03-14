<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha ='';
$banco = 'revisao';
 if ($conexao=mysqli_connect($servidor,$usuario,$senha,$banco)){
  //  echo 'conexão realizada com sucesso';
 } else{
    echo 'Erro,sem CONEXÃO!!';
 } 


?>