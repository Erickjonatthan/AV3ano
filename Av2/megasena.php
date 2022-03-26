<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
<title>Mega sena</title>

</head>
<body>
  <?php

  if(isset($_GET['num1'])) {
    $num1= $_GET['num1'];
  }
  if(isset($_GET['num2'])) {
    $num2 = $_GET['num2'];
  }
  if(isset($_GET['num3'])) {
    $num3 = $_GET['num3'];
  }
  if(isset($_GET['num4'])) {
    $num4 = $_GET['num4'];
  }
  if(isset($_GET['num5'])) {
    $num5 = $_GET['num5'];
  }
  if(isset($_GET['num6'])) {
    $num6 = $_GET['num6'];
  }

  if (!preg_match('/^[1-9][0-9]*$/',$num1  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {

    echo "Não poderá participar por causa desse número: {$num1}";
    }
  elseif (!preg_match('/^[1-9][0-9]*$/',$num2  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {

    echo "Não poderá participar por causa desse número: {$num2}";
  }
  elseif (!preg_match('/^[1-9][0-9]*$/',$num3  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {

echo "Não poderá participar por causa desse número: {$num3}";
  }
  elseif (!preg_match('/^[1-9][0-9]*$/',$num4  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {

      echo "Não poderá participar por causa desse número: {$num4}";
  }
  elseif (!preg_match('/^[1-9][0-9]*$/',$num5  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {


echo "Não poderá participar por causa desse número: {$num5} ";
}
  elseif (!preg_match('/^[1-9][0-9]*$/',$num6  ) && ($num1 or $num2 or $num3 or $num4 or $num5 or $num6 <= 0) ) {


    echo "Não poderá participar por causa desse número: {$num6}";
  }
  else {
    echo "Poderá participar";
  }

   ?>

     <a href="indexQuest6.php">Digitar mais</a>

</body>
</html>
