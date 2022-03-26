<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questão 7</title>
    <style type="text/css">
    body{

   font-family: Verdana;
   background-image: url(../imagens/Fundo_de_loja.jpg);

    }
    .moldura-dois {
      width: 258px;
      border:4px inset #E6E6FA;
      padding:15px;
      background: #000000;
      margin: auto;
      padding: auto;
    }

    .moldura-um {
      width:304px;
      border:8px inset #E6E6FA;
      padding:15px;
      background: #E0FFFF;
      margin: auto;
      padding: auto;
    }

    </style>
  </head>
  <body>

    <p align = "center">
      <div class="moldura-um">
        <div class="moldura-dois">
          <font size = "2" color = "white">
            <form action="q7pt2.php" method="post">
              N&uacute;mero de Roupas: <input type="number" min="0" name="n1" required><br>
              N&uacute;mero de Livros: <input type="number" min="0" name="n2"required><br>
              N&uacute;mero de Eletronicos: <input type="number" min="0" name="n3" required><br>
              Qual op&ccedil;&atilde;o de pagamento voc&ecirc; escolhe:
              <br>
              <input type="radio" name="n4" value="1" required>Pagamento a vista<br>
              <input type="radio" name="n4" value="2" >Pagamento com prazo de 30 dias<br>
              <input type="radio" name="n4" value="3">Pagamento com prazo de 60 dias<br><br>
              <input type="submit">

            </form>
          </font>
        </div>
      </div>
</body>
</html>
