<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
      <title>Soma fração fatoriada</title>

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
    1)O numerador começa de 100 e vai até 81;
    2)O denominador vai de 0! ate 19!;
    3)Como o numerador diminui, ele é subtraido;
    4)É criada uma variavel que recebe o denominador fatoriado;
    5)A variavel soma começa a receber o valor da divisao e soma com os proximos valores;
    6)Exibe na tela a soma total apos as 20 vezes (o numberformat serve para abreviar o numero);
*/

//funcao para fatoriar um numero
function Fatoriar($a){
  $fat = 1;
  for ($cont = 1; $cont <= $a ; $cont++) {
    $fat =$fat * $cont;

  }

   return $fat;

}

//numerador vale 101 pois quero comecar do 100
$numerador = 101;

$soma = 0;
for ($denominador=0; $denominador < 20; $denominador++) {

  $numerador--;

  $denomifator = Fatoriar($denominador);

 $soma = $soma + ($numerador / $denomifator);

}

echo '
  <div>
  O valor da soma dos 20 primeiros termos da s&eacute;rie :<br><br>100/0! + 99/1! + 98/2! + 97/3!..<br><br> --resposta = ' .number_format((float)$soma, 2, '.', '').'<br>
  </div>';

 ?>
    </body>
</html>
