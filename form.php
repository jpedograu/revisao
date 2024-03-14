<?php 
 include "conexao.php";
 $nome =$_POST ['nome'];
 $email =$_POST ['email'];
 $endereco =$_POST ['endereco'];
 $telefone =$_POST ['telefone'];
 $data =$_POST ['data'];
 $senha =$_POST ['senha'];

 $sql ='INSERT INTO pessoa(nome,email,endereco,telefone,data,senha)';
?>