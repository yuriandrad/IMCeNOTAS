<?php
  $nome = $_POST["nome"];
  $genero = $_POST["genero"];
  $peso = $_POST["peso"];
  $altura = $_POST["altura"];

$pesos = str_replace(",",".",$peso);
    $alturas = str_replace(",",".",$altura);
    echo "Olá $nome, seu IMC é: ";

function calculo($p,$a){
    $imc=$p/($a*$a);
    $imcNovo= round ($imc, 2);
    echo "$imcNovo.<br>";

    if ($imc < 17){
        $sit=" Muito abaixo do peso.";
    } elseif ($imc < 18.49){
        $sit=" Abaixo do peso.";
    } elseif ($imc < 24.99){
        $sit=" Peso normal.";
    } elseif ($imc < 29.99){
        $sit=" Acima do peso.";
    } elseif ($imc < 34.99){
        $sit=" Obesidade I.";
    } elseif ($imc < 39.99){
        $sit=" Obesidade II (severa).";
    } else {
        $sit=" Obesidade III (mórbida).";
    }

    if (isset($imc) && $imc!='0'){
        echo "Seu resultado é:";
        echo $sit;
    }
}
 
calculo($pesos, $alturas)

?>
