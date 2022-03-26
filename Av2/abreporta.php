<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
<title>Abre porta</title>

</head>
<body>

<?php

$porta= 120; $f = 0;$f1= 0; $f2= 0; $f3= 0;
if(isset($_GET['f1'])) {
  $f1= $_GET['f1'];
}
if(isset($_GET['f2'])) {
  $f2= $_GET['f2'];
}
if(isset($_GET['f3'])) {
  $f3= $_GET['f3'];
}

if ($f1 && $f2 && $f3 != 0){
$f= $f1 + $f2 + $f3;
}
if ($f > $porta) {

  print "Parabéns, força: {$f} e abriu a porta";
}

elseif ($f3 >= $porta) {
  $f = $f3;
  echo "Parabéns, força: {$f} e abriu a porta";
}
else  {
  echo "Não abriu a porta";
}

 ?>
 <a href="indexQuest4.php"> Voltar</a>
</body>
  </html>
