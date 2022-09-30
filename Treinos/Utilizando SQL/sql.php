<?php 

$host = "localhost";
$user = "root";
$key = "";
$name_banco = "test";

$connect = new mysqli($host,$user,$key,$name_banco);

if($connect->connect_errno)
{echo "Houve um ERRO com a Conexão com Banco: ".$connect->connect_error;}



?>