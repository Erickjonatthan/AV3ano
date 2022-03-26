<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questão 7</title>
    <style media="screen">
    body{

   background-image: url(../imagens/Fundo_de_loja.jpg);

    }
    </style>
  </head>
  <body>
    <table border ="1" p align = "center">
      <?php
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $n3 = $_POST['n3'];
      $n4 = $_POST['n4'];
      $x = rand(0, 50);
      $y = rand(0, 50);
      $z = rand(0, 50);
      echo "<br>";

      $cr = $n1 * $x;
      $cl = $n2 * $y;
      $ce = $n3 * $z;
      $va = $cl + $cr + $ce;
      $p1 = $va * 0.10;
      $p2 = $va * 0.04;
      $p3 = $va * 0.0938;

      echo "<td> </td><td bgcolor = #F5F5F5>";
      echo "<font face = impact color = black>O valor das compras do cliente       &eacute; R$: $va</font>";
      echo "</td></tr>";

      if($n4 == 1){
        echo "<br>";
        $Op1 = $va - $p1;
        echo "<td> </td><td bgcolor = #F5F5F5>";
        echo "<font face = impact color = black>Op&ccedil;&atilde;o 1 escolhida valor a ser pago &eacute; R$ $Op1</font>";
        echo "</td></tr>";

      }

      elseif($n4 == 2){
        echo "<br>";
        $Op2 = $va + $p2;
        echo "<td> </td><td bgcolor = #F5F5F5>";
        echo "<font face = impact color = black>Op&ccedil;&atilde;o 2 escolhida valor a ser pago &eacute; R$ $Op2</font>";
      }

      elseif($n4 == 3){
        echo "<br>";
        $Op3 = $va + $p3;
        echo "<td> </td><td bgcolor = #F5F5F5>";
        echo "<font face = impact color = black>Op&ccedil;&atilde;o 3       escolhida valor a ser pago &eacute; R$ $Op3</font>";
        echo "</td></tr>";
      }
      else{

        echo "<td> </td><td bgcolor = #F5F5F5>";
        echo "<font face = impact color = black>Essa op&ccedil;&atilde;o de pagamento n&atilde;o existe</font>";
        echo "</td></tr>";
      }

      ?>
    </table>

  </body>
</html>
