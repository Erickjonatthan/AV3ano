<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

      <title>Questão 5</title>
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
            margin-right: auto;
            margin-left :  1350px;

            padding : auto;
            width : 450px;
  }
</style>
</head>
			<body>

		<?php


  //funcão para retornar numero par
    function Descobrepar($arey) {
      $numspar = [];
      $tamanho = 30;
      for($i = 0; $i < $tamanho; $i++){
        if ($arey[$i] % 2  == 0) {
          $numspar[] = $arey[$i];
        }
      }

      return $numspar;
    }
  //funcão para contar a quantidade de pares
    function contapar($arey) {

      $tamanho = 30;
      $cont=0;
      for($i = 0; $i < $tamanho; $i++){
        if ($arey[$i] % 2  == 0) {
          $cont++;
        }
      }

      return $cont;
    }
    //funcão para retornar numero impar
      function DescobreIMPAR($arey) {
        $numspar = [];
        $tamanho = 30;
        for($i = 0; $i < $tamanho; $i++){
          if ($arey[$i] % 2  != 0) {
            $numspar[] = $arey[$i];
          }
        }

        return $numspar;
      }
    //funcão para contar a quantidade de impares
      function contaIMPAR($arey) {

        $tamanho = 30;
        $cont=0;
        for($i = 0; $i < $tamanho; $i++){
          if ($arey[$i] % 2  != 0) {
            $cont++;
          }
        }

        return $cont;
      }

   //funcao ordenar array
    function Ordena($arrey){
      $substiuidor = null;
      $taman = 30;
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
    //funcao ordenar array Par
     function OrdenaPAR($arrey,$cont){
       $substiuidor = null;
       $taman = $cont;
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
     //funcao ordenar array Impar
      function OrdenaIMPAR($arrey,$cont){
        $substiuidor = null;
        $taman = $cont;
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
      //funcao para descobrir o maior numero
      function MAIOR($v, $tam) {
      $maior = 0;
      for ($i=0; $i <  $tam; $i++) {
        if ($v[$i] > $maior) {
          $maior = $v[$i];
        }
      }
return $maior;
        }


      //funcao descobir a posicao do maior numero
      function DescobrePosiMAIOR($v,$tam) {

         $maior = 0;
      $posic = 0;
      for ($i=0; $i < $tam ; $i++) {
        if ($v[$i] > $maior) {
          $maior = $v[$i];
          $posic= $i;
        }
      }


        return $posic+1;
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
    function ExibirParORD($aray, $cont){
      echo '	<table border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>N&uacutemeros pares ORDENADOS</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table>';
    }
    function ExibirImpar($aray, $cont){
      echo '	<table border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>N&uacutemeros impares</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table>';
    }
    function ExibirImparORD($aray, $cont){
      echo '	<table border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>N&uacutemeros impares ORDENADOS</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table>';
    }

/*criando o array com 30 elementos*/
for ($i=0; $i < 30; $i++) {
  $nums[$i] = rand(111,929);
}

$contarraypar = 0;


/*exibir não ordenado*/
ExibirNaoOrd($nums,30);


//ordenar
$numsord=Ordena($nums);
/*exibir ordenado*/

Exibir($numsord,30);


//retornar array par e a quantidade
$pares = Descobrepar($nums);
$contarraypar = contapar($nums);
/*exibir numeros pares */
ExibirPar($pares,$contarraypar);

//ordena array par
$numsordPAR=OrdenaPAR($pares,$contarraypar);
//exibre par ordenados
ExibirParORD($numsordPAR,$contarraypar);

//retornar array impar e a quantidade
$impares = DescobreIMPAR($nums);
$contarrayimpar = contaIMPAR($nums);
/*exibir numeros impares */
ExibirImpar($impares,$contarrayimpar);

//ordena array par
$numsordIMPAR=OrdenaIMPAR($impares,$contarrayimpar);
//exibre par ordenados
ExibirImparORD($numsordIMPAR,$contarrayimpar);


//saber numero maior
$maiorr = MAIOR($nums, 29);
//saber posicao do maior
$posi = DescobrePosiMAIOR($nums,29);
//exibir o maior e a posicao
  echo '<div><h2>&nbspEste &eacute; o maior n&uacute;mero : '.$maiorr. '</h2>';
  echo '<h2>&nbspEsta &eacute; a posi&ccedil;&atilde;o do maior &nbspn&uacute;mero no array n&atilde;o ordenado: &nbsp'.$posi. 'º</h2>';


?>
</body>
</html>
