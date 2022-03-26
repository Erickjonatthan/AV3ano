<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">

  <title>Exibir dados</title>

  <style>

  body{
    background-color: #222;
   font-family: Verdana;
   font-size: 100%;


  }

 table {
  border: 1px solid black;
  border-collapse: collapse;
  margin: auto;
 }


  th, td{
  padding: 10px;
  text-align: center;
  width: auto;

  }
</style>
</head>
<body>
  <div>

  <table border = "1">

   <tr><th bgcolor = "#1200db" colspan = "5"><font color= "white">DADOS COLETADOS</font></th></tr>

  <tr>

   <th bgcolor = "white">Nome:</th>
   <th bgcolor = "white">Sexo:</th>
   <th bgcolor = "white">Idade:</th>
   <th bgcolor = "white">Altura:</th>
   <th bgcolor = "white">Peso:</th>

 </tr>

  <?php
  /*O programa consiste na seguinte maneira:
  1)Recebe os dados do formulario, pelo metodo POST;
  2)cria a tabela por meio de html;
  3)Exibe em cada coluna os dados respectivamente;


*/
    @$nome = $_POST['nome'];
    @$idade =$_POST['idade'];
    @$sexo = $_POST['sexo'];
    @$alt = $_POST['alt'];
    @$peso = $_POST['peso'];

if ($sexo == 1) {
  $sexo = 'Masculino';
}
else{
  $sexo = 'Feminino';

}
echo "<tr><td bgcolor = 'white'>$nome</td>
     <td bgcolor = 'white'>$sexo</td>
     <td bgcolor = 'white'>$idade</td>
     <td bgcolor = 'white'>$alt</td>
     <td bgcolor = 'white'>$peso</td>
     </table>
     </div>";

 ?>
</body>
</html>
