<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
<title>Base expoente</title>

</head>
<body>

<?php
if(isset($_GET['num1'])) {
  $num1= $_GET['num1'];
}
if(isset($_GET['num2'])) {
  $num2 = $_GET['num2'];
}
$result=0;
$result =pow( $num1, $num2);


echo "<h1> O resultado é: $result</h1>";


 ?>
<a href="indexQuest10.php"> Voltar</a>
</body>
  </html>
