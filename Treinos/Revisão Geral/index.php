<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body{font-family:Arial,sans-serif;}
    h1 {text-align:center;}
    </style>
</head>
<body>


<h1> PHP Traning</h1>
<br> 



<?php 

echo "<br> <h2> Var, e Function </h2> </br> ";
$var = 5;


function echoF($value){
echo $value;
}

if($var == 6){
echoF($var); echo "<strong>"."<br> concatenação <br>".$var."< var"."</strong>";
}else{
echoF("NOT IS THE SAME"); 
echo "<br>";
echoF("value var: ".$var);
}

echo "<br> <h2>Array</h2> <br>";

$array = array("um","dois");

array_push($array,"blue","yellow",3);

for($i=0;$i<count($array);++$i){
echo "Vetor: ".($i+1)." = ".$array[$i]."<br>";
}


echo "Vetores do array numero: ".count($array);




echo "<br> <h2> Classes</h2> </br> ";

class Pessoa {
public $nome;
public $idade;
public $endereco = array("end","city","num");

public function __construct($nome,$idade,$end,$city,$num){
$this-> nome = $nome;
$this-> idade = $idade;
$this-> endereco["end"] =  $end;
$this-> endereco["city"] =  $city;
$this-> endereco["num"] =  $num;
// $this->PrintDATA(); 
}

public function PrintDATA(){
echo "Nome: ". $this->nome; 
echo "<br> Idade: ".$this->idade;
echo "<br> Endereço: ".$this->endereco["end"]." Cidade: ".$this->endereco["city"]." Numero: ".$this->endereco["num"];
}
}

echo " <br> <strong> Pessoa 01: </strong> <br>";
$joao = new Pessoa("João",24,"Av. Bernado","São Paulo","2455");

$joao->PrintDATA();

echo " <br> <strong> Pessoa 02: </strong> <br>";

$carlos = new Pessoa("Carlos",17,"Av. Brito","Rio de Janeiro","520");

$carlos->PrintDATA();


?>
</body>
</html>