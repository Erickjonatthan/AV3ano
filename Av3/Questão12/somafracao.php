<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
      <title>Soma fração</title>

<style>

body{

  font-family: sans-serif;
  font-size : 22;
  background-image: url(../imagens/mate1.png);


}
div {
    background-color: black;
    color : white;
    width: 450px;
    padding: 25px;
    border: 10px solid #4CAF50;
    margin-left: auto;
    margin-right: auto;
    margin-top: 200px;
}


</style>
</head>
	 <body>
	<?php
    /*O programa consiste na seguinte maneira:
    1)O denominador começa de 1 e vai até 10;
    2)O numerador vai de 1 ate 10 tambem;
    3)Nisso é criada a variavel de numeros negativos pares, podendo receber numeros positivos caso seja impar;
    4)Eleva o denominador ao quadrado;
    5)A variavel soma começa a receber o valor da divisao e soma com os proximos valores;
    6)Exibe na tela a soma total apos as 10 vezes (o numberformat serve para abreviar o numero);
*/

//função para retornar números pares negativos e numeros impares positivos
function ParNegativo($a){
  if ($a % 2 == 0) {
    $a =  $a * (-1);
    return $a;
  }
  else {
    return $a;
  }
}

//funcao potencia de um numero, nesse caso ao quadrado
function quadrado($base,$expo){
  if ($expo == 0) {
    $pot = 1;
  }
  else {
    $pot = $base;
      while ($expo > 1 ) {
      $pot = $pot * $base;
      $expo --;
    }
  }
return $pot;
}


$numerador = 0;

$soma = 0;

for ($denominador=1; $denominador < 11; $denominador++) {
  $numerador++;

$numnegpar = ParNegativo($numerador);
$denomiquad = quadrado($denominador,2);


 $soma = $soma + ($numnegpar / $denomiquad);

}
echo '<div>
      O valor de S da s&eacute;rie :<br><br> S = 1/1 - 2/4 + 3/9 - 4/16 + 5/25 - 6/36 ... -10/100<br><br> --resposta = ' .number_format((float)$soma, 2, '.', '').'<br>
      </div>';

 ?>
    </body>
</html>
