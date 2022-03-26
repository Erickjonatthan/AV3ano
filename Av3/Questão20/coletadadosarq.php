<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Coleta de dados</title>
   <style>

   body{
   font-family: sans-serif;
   background-color: #545454;


   }

   div {
       background-color:white;
       color : black;
       width: 210px;
       height:auto;
       padding: 25px;
       border: 7px solid #db7800;
       margin-left: auto;
       margin-right: auto;
       border-radius: 10px;
       margin-top: 10px;
   }

   nav{
   text-align: center;
   }

   .botao{

   margin-top: 20px;
   background: #c46703;
   color: white;
   border-color: #c46703;
   height: 30px;
   width: 95px;
   cursor: pointer ;
   border-radius: 10px;
   }

   </style>
 </head>
 <body>

<?php
/*O programa consiste na seguinte maneira:
1)Cria um for para gerar formulario;
2)O nome da variavel $nome e $sexo é a contadenação da variavel $i que é criada pelo for ;
3)Envia todos os 10 nomes e sexos para um programa que ira confirma a criacao do arquivo txt;

*/
for ($i=0; $i < 10; $i++) {
  echo '<div>';
  echo '<nav>';
  echo '<ins>Pessoa Nº ' .($i+1).'</ins><br>';
  echo '</nav>';
  echo '<form action="confirma.php" method="post" >
  Nome:
  <input type="text" name="nome'.($i).'" required >

  <br><br>

  Sexo:
<select name="sexo'.($i).'" required>
  <option disabled selected value> -- selecione uma op&ccedil;&atilde;o -- </option>
  <option value="1"> Masculino </option>
  <option value="2"> Feminino </option>

  </select>
  <br>
  </div>

  ';

}
echo '
<nav>
<input type="submit" class = "botao" value="ENVIAR">
</nav>
</form>';




echo '</body>
</html>';
?>
