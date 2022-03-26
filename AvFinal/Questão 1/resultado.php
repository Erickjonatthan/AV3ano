<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Resultado</title>
		<style>

		body{

		  font-family: sans-serif;

		  background-image: url(../imagens/fundo.png);


		}
		div {
		    background-color: #828282;
		    color : black;
		    width: 450px;
		    padding: 25px;

		    margin-left: auto;
		    margin-right: auto;
		    margin-top: 200px;
				text-align: center;
		}
		.falso{

     border: 6px solid red;

		}
		.verdadeiro{
			      border: 6px solid #4CAF50;
		}


		</style>
	</head>
	<body>

		<?php

		function ValidaCpf($cpf)
		{
			$cpf = $_POST['cpf'];
			$cpf = preg_replace('/[^0-9]/', '', $cpf);
			$D1 = 0;
			$D2 = 0;


			for($i = 0, $x = 10; $i <=8; $i++,$x--){
				$D1 += $cpf[$i] * $x;

			}

			for($i = 0, $x = 11; $i <=9; $i++,$x--){
				if (str_repeat($i, 11) == $cpf){
					return false;
				}
				$D2 += $cpf[$i] * $x;
			}

			$re1 = (($D1%11) < 2) ? 0 : 11-($D1%11);
			$re2 = (($D2%11) < 2) ? 0 : 11-($D2%11);
			if ($re1 != $cpf[9] || $re2 != $cpf[10]) {
				return false;
			}else{
				return true;
			}

		}
		@ValidaCpf($cpf);
		if(@ValidaCpf($cpf) == true){
			echo "<div class = 'verdadeiro'>Esse CPF é Verdadeiro</div>";

		}else{
			echo "<div class = 'falso'>Esse CPF é Falso</div>";

		}
		?>

	</body>
</html>
