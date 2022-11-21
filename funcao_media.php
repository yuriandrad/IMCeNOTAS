<?php
$nome=$_POST["nome"];
$nota1=$_POST["n1"];
$nota2=$_POST["n2"];
//$media="";

echo "Olá $nome, <br>";

function media($n1, $n2){ 
    $media=($n1+$n2)/2;
    echo "Sua média é: $media<br>";
    
    if ($media < 4){
        $sit= "Reprovado.";
    } elseif ($media < 6){
        $sit="Exame final.";
    } else{
        $sit="Aprovado!";
    }

    echo "Situação: $sit";
  
}

media($nota1,$nota2);
?>
