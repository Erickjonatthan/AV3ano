<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questão 6</title>
    <style>
    table{

    text-align: center;
    float: left;
      margin-left :  550px;
    padding: auto;

     }
   body{

  font-family: Verdana;
  background-image: url(../imagens/a.jpg);

   }
  div{
            background-color: #FFFFFF;
            border: 2px solid #999;
            margin-right: auto;
            margin-left :  650px;
            padding : auto;
            width : 350px;
            height: 100px;
  }
</style>
  </head>
  <body>
    <?php
    function Exibir($aray,$cont){
    echo '	<table border = "1" bgcolor = #000000 >
    	<tr><th bgcolor = "orange" texta>N&uacutemeros </th></tr>';
    for($i = 0; $i < $cont ;$i++){
    	echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
    }
    echo '</table>';
    }
    $qrt = 0;
    $qrt2 = 0;
    $peso2 = 2;
    $peso3 = 3;
    $numspar = [];
    $numsimpar = [];
    $somapar = 0;
    $somaimpar = 0;
    for ($i=0; $i < 10; $i++) {
      $num[$i] = rand (0,10);

      if ($num[$i] % 2 == 0){
        $numspar[$i] = $num[$i] * 2;
        $qrt++;
        $somapar = $somapar + $numspar[$i];


      }
      else {
        $numsimpar[$i] = $num[$i]* 3 ;
        $qrt2++;

        $somaimpar = $somaimpar + $numsimpar[$i];

      }
    }


    $PesoPar= $qrt *2;
    $PesoImp = $qrt2 * 3;
    $somatotal = $somapar + $somaimpar;
    $peso = $PesoImp+ $PesoPar;
    $mediapond = $somatotal / $peso;
Exibir($num,10);
    echo  '<div><h2>&nbspM&eacute;dia ponderada: ' .number_format((float)$mediapond, 2, '.', '').'</h2></div>';

    ?>

  </body>
</html>
