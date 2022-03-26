<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
<title>Chegar escola</title>

</head>
<body>

<?php
$tempo= 50;
$opcao1=0;$opcao2=0;$opcao3=0;$opcao4=0;$opcao5=0;$opcao6=0;$qtd=0;
if(isset($_GET['opcao1'])) {
  $opcao1= $_GET['opcao1'];
}
if(isset($_GET['opcao2'])) {
  $opcao2= $_GET['opcao2'];
}
if(isset($_GET['opcao3'])) {
  $opcao3= $_GET['opcao3'];
}
if(isset($_GET['opcao4'])) {
  $opcao4= $_GET['opcao4'];
}
if(isset($_GET['opcao5'])) {
  $opcao5= $_GET['opcao5'];
}
if(isset($_GET['opcao6'])) {
  $opcao6= $_GET['opcao6'];
}
if(isset($_GET['qtd'])) {
  $qtd= $_GET['qtd'];
}
if ($opcao1 && $opcao2 && $opcao3 && $opcao4 && $opcao5 && $opcao6) {
  $tempo=270 + (10* $qtd);

}
elseif ($opcao1 && $opcao2) {
  $tempo=60;

}
elseif ($opcao2 && $opcao3) {
  $tempo=110;

}
elseif ($opcao3 && $opcao4) {
  $tempo=50;
}
elseif ($opcao4 && $opcao5) {
  $tempo=30 + (10* $qtd);

}
elseif ($opcao5 && $opcao6) {
  $tempo=20 + (10* $qtd);

}
if ($opcao6) {
  $tempo=$tempo - 30;

}


if ($opcao1) {
  $tempo=$tempo - 30;

}

if ($opcao2){
  $tempo=$tempo + 40;

}

if ($opcao3) {
  $tempo=$tempo + 20;

}


if ($opcao4) {
  $tempo=$tempo - 20;

}


if ($opcao5) {
  $tempo=$tempo + (10* $qtd);

}
echo "<h1>Demorou {$tempo}minutos para chegar a escola.</h1>";




 ?>
 <a href="indexQuest2.php"> Voltar</a>
</body>
  </html>
