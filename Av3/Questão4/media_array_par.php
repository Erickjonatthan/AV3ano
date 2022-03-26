<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
      <title>Média array numero par</title>

			<style>
    table{

    text-align: center;
    float: left;
    margin-left : 10px;

     }
   body{

  font-family: Verdana;
  background-image: url(../imagens/a.jpg);

   }
  div{
            background-color: #FFFFFF;
            border: 2px solid #999;
            margin-left :  630px ;
            padding : auto;
            width : 450px;
  }
</style>
</head>
			<body>

		<?php

    /*O programa consiste na seguinte maneira:
    1)Criar um array de 20 elementos;
    2)Exibi-lo com determinada função;
    3)Ordena-lo com determinada função e exibir o array ordenado;
    4)Criar outro array somente com numeros pares e sabe a quantidade com uma função
    5)Exibir o array par;
    6)Somar cada elemento;
    7)Calcular a media.(o numberformat serve para abreviar o numero)*/


  //funcão para somar um array
    function soma($valor, $cont){
      $soma =0;
      for ($j=0; $j < $cont ; $j++) {
        $soma = $valor[$j] + $soma;


      }
      return $soma;
    }

  //funcão para retornar numero par
    function Descobrepar($arey) {
      $numspar = [];
      $tamanho = 20;
      for($i = 0; $i < $tamanho; $i++){
        if ($arey[$i] % 2  == 0) {
          $numspar[] = $arey[$i];
        }
      }

      return $numspar;
    }
  //funcão para contar a quantidade de pares
    function contapar($arey) {

      $tamanho = 20;
      $cont=0;
      for($i = 0; $i < $tamanho; $i++){
        if ($arey[$i] % 2  == 0) {
          $cont++;
        }
      }

      return $cont;
    }

   //funcao ordenar array
    function Ordena($arrey){
      $substiuidor = null;
      $taman = 20;
      for($i = 0; $i < $taman; $i++){
        if($i < $taman - 1)
        $k = $i + 1;
        for($j = 0; $j < $taman ;$j++){
          if($arrey[$j] > $arrey[$k]){
            $substituidor = $arrey[$j];
            $arrey[$j] = $arrey[$k];
            $arrey[$k] = $substituidor;
          }
        }
      }
      return $arrey;
    }

    function ExibirNaoOrd($aray, $cont){
      echo '	<table border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>N&uacutemeros n&atilde;o ordenados</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table>';
    }

    function Exibir($aray, $cont){
    echo '	<table border = "1" bgcolor = #000000 >
    	<tr><th bgcolor = "orange" texta>N&uacutemeros ordenados</th></tr>';
    for($i = 0; $i < $cont ;$i++){
    	echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
    }
    echo '</table>';
    }


    function ExibirPar($aray, $cont){
      echo '	<table border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>N&uacutemeros pares</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table>';
    }


/*criando o array com 20 elementos*/
$nums = array(
rand(1,200),rand(1,200),rand(1,200),rand(1,200),rand(1,200),
rand(1,200),rand(1,200),rand(1,200),rand(1,200),rand(1,200),
rand(1,200),rand(1,200),rand(1,200),rand(1,200),rand(1,200),
rand(1,200),rand(1,200),rand(1,200),rand(1,200),rand(1,200),
rand(1,200),rand(1,200),rand(1,200),rand(1,200),rand(1,200));

$contarraypar = 0;


/*exibir não ordenado*/
ExibirNaoOrd($nums,20);


//ordenar
$numsord=Ordena($nums);

/*exibir ordenado*/
Exibir($numsord,20);


//retornar array par e a quantidade
$pares = Descobrepar($nums);
$contarraypar = contapar($nums);

/*exibir numeros pares */
ExibirPar($pares,$contarraypar);

//exibe a soma, quantidade e a media de numeros pares
if ($contarraypar > 0) {
  $somapares = soma($pares, $contarraypar);
  $medpar = $somapares/$contarraypar;
  echo '<div><h2>&nbspSoma n&uacutemeros pares: '.$somapares. '</h2>';
  echo '<h2>&nbspQuantidade n&uacutemeros pares: '.$contarraypar. '</h2>';
	echo '<h2>&nbspM&eacutedia n&uacutemeros pares: '.number_format((float)$medpar, 2, '.', '').'</h2></div>';
}
else {
	echo '<div><h2>&nbspSem n&uacutemeros pares :(</h2></div>';
}

?>
</body>
</html>
