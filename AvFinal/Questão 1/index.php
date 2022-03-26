<!DOCTYPE html>
<html>
<head>
     <title>Quest&atilde;o 1</title>
     <meta charset="utf-8">

	 <style type="text/css">
     body{


   		  font-family: sans-serif;

 background-image: url(../imagens/fundo.png);



		 }
		 fieldset{
			 width: 60%;
			 text-align: center;
margin: auto;
padding: auto;
background-color: #828282;
		 }

		 input[type=submit]{
			 margin: 5px 0;
			 cursor: pointer;
			 width:80px;
			 font-size: 15px;
			 background-color: grey;
			 color: white;
		 }
      </style>
</head>
<body>

	    <fieldset>
		     <legend><h2>Validação de CPF</h2></legend>

			 <form method="POST" action="resultado.php">
			 <input type="text" name="cpf" required="" maxlenght= "11"></br>
			 <input type="submit" name="enviar">
			 </form>

		</fieldset>

</body>
</html>
