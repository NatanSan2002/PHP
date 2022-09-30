<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilizando SQL</title>
    <style> 
     *{margin:auto;text-align: center;}
</style>

</head>
<body>
    
<h1>Utilizando SQL</h1>

<?php 
include"sql.php";

$tabela = "personagens";

//$safe_search = $connect->real_escape_string($_GET['name_input']);

$sql_code = "SELECT * from $tabela where idade <= 22"; 

$busca = $connect->query($sql_code) or die ("ERRO ao consultar o banco ".$connect->error);

echo "<h2>Busca por Idade, 22 pra baixo </h2>"; 

if($busca->num_rows == 0 ){
echo "Nada foi achado";
}else{
while($data = $busca->fetch_assoc()){
?>

<p>Nome: <?php  echo $data["nome"]; ?> </p>
<p>Idade: <?php  echo $data["idade"]; ?> </p>
<p>Série: <?php  echo $data["serie"]; ?> </p>
<br><br>
<?php

}
}





?>

    
</body>
</html>