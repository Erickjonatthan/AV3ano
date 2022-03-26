<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Triangulo Retangulo</title>

<style>
body{

          font-family: Verdana;
          background-image: url(../imagens/formulas.jpg);

}
hr{
border: 1px solid white;


}
img{
             width : 250px;
             height : 140px;


}
#centralizar{
          text-align : center;


}
#cabecalho{
              background-color: #313133;
              text-align : center;
              color:white;
              height: 70px;
              width : 450px;
              margin: auto;



}
#info {
              background-color: #313133;
              text-align : center;
              color:white;
              height: 90px;
              width : 450px;
              margin: auto;

}
#trio {
            background-color: #FFFFFF;
            width: 550px;
            margin: 20px auto;
            padding: 20px;
            text-align : center;
        }
          .cria {

                    border: 4px solid green;

                }
          .ncria{

                  border: 4px solid red;

              }

</style>
</head>
  <body>

      <div id = "cabecalho">
      <h3>A condi&ccedil;&atilde;o de exist&ecirc;ncia de um tri&acirc;ngulo ret&acirc;ngulo &eacute; definida pelo Teorema de Pit&aacute;goras: a² = b² + c².</h3><br>
      </div>

     <br>

     <div id = "centralizar">

  	<img src = "../imagens/tri.jpg" title="Imagem de um Triangulo Retangulo" alt="Imagem de um Triangulo Retangulo">

     </div>

      <div id = "info">
        <h2>a= Hipotenusa<br>b= Cateto 1 <br>c= Cateto 2 </h2>
      </div>

    <?php


    /*  O programa consiste na seguinte maneira:
    1)Criar 2 arrays de 3 elementos 10 vezes, um recebendo dados normais e o outro ao quadrado;
    2)Colocar os arrays na funcão;
    3)A funcao cria uma variavel de soma que recebe os lados ao quadrado;
    4)Compara a soma se é igual a hipotenusa;
    5)Exibe na tela;
     */




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

//funcao para saber se o Triangulo existe ou nao e exibir na tela
function Existe($ladosa,$ladosb,$n){
$soma2=  $ladosb[2] + $ladosb[3];
if (($ladosa[1] <= 0) or ($ladosa[2] <= 0) or ($ladosa[3] <=0)) {
    echo "<hr>";
    echo '<div id ="trio" class = "ncria">N° '.$n.'<br>';
    echo 'Hipotenusa: '.$ladosa[1].'<br>Cateto 1: '.$ladosa[2].'<br>Cateto 2 : '.$ladosa[3].'<br>';
    echo "N&Atilde;O EXISTE LADO COM ESSE(S) N&Uacute;MERO";
    echo "</hr></div>";
}

else if (($ladosb[1] == $soma2)){
    echo "<hr>";
    echo '<div id ="trio" class = "cria">N° '.$n.'<br>';
    echo 'Hipotenusa: '.$ladosa[1].'<br>Cateto 1: '.$ladosa[2].'<br>Cateto 2: '.$ladosa[3].'<br>';
    echo "&Eacute; UM TRI&Acirc;NGULO RET&Acirc;NGULO!";
    echo "</hr></div>";
}

else{

    echo "<hr>";
    echo '<div id ="trio" class = "ncria">N° '.$n.'<br>';
    echo 'Hipotenusa: '.$ladosa[1].'<br>Cateto 1: '.$ladosa[2].'<br>Cateto 2 : '.$ladosa[3].'<br>';
    echo "N&Atilde;O &Eacute; UM TRI&Acirc;NGULO RET&Acirc;NGULO";
    echo "</hr></div>";
}

}
//criando os 10 trios numericos, i vale um pois quero que comece de 1
for ($i=1; $i < 11 ; $i++) {

//OBS:: professor, coloquei esses valores para testar
  $a = rand(-7,10);
  $b =rand(6,8);
  $c =rand(4,6);

  //identificando a hipotenusa, que é o maior lado:
  if ($a > $b and $a > $c) {
    $hipo = $a;
    $ladoB = $b;
    $ladoC = $c;
  }
  else if ($b > $a and $b > $c) {
    $hipo = $b;
    $ladoB = $a;
    $ladoC = $c;
  }
  else if ($c > $a and $c > $b) {
    $hipo = $c;
    $ladoB = $a;
    $ladoC = $b;

  }
  else if ($c == $b)  {
    $hipo = $b;
    $ladoB = $a;
    $ladoC = $c;

  }
  else {
    $hipo = $a;
    $ladoB = $b;
    $ladoC = $c;
  }

  $hipo2 = quadrado($hipo,2);
  $ladoB2 = quadrado($ladoB,2);
  $ladoC2 = quadrado($ladoC,2);

  //gerando array de 3 lados ao quadrado e outro com os lados normais
  $treslados2 = array('1' => $hipo2, '2' => $ladoB2, '3'=> $ladoC2 );
  $treslados = array('1' => $hipo, '2' => $ladoB, '3'=> $ladoC );

  //aplicando a funcao de existencia
  Existe($treslados, $treslados2,$i);
}

 ?>
</body>
 </html>
