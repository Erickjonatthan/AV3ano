<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Confirmação</title>
    <style>

    body{
    font-family: sans-serif;
    background-color: #545454;
    color : white;
    text-align: center;
}
    </style>
  </head>
  <body>
<?php
/*O programa consiste na seguinte maneira:
1)Recebe os 10 nomes e sexos pelo metodo POST com o foreach;
2)cria um array para cada um, pois, são nomes e sexos diferentes e é necessário armezenar cada um deles;
3)Após a criação dos dois arrays de 10 elementos cada, criasse os dois arquivos, homem txt e mulher txt;
4)Deixa aberto esses dois arquivos para somente inserir dados(escrita);
5)Criasse 2 for, um para receber o conteudo masculino e outro feminino;
6)Onde dentro desse for a variavel $Sexos receberá o nome de cada um dos 10 nomes digitados;
7) Se o $Sexo for igual a 1 o conteudo é masculino e se for igual a 2 é feminino(por isso necessita de 2 for, primeiro para
saber os homens e depois as mulheres).
8) Exibe a tela uma mensagem que o arquivo foi criado.
*/
/*Realiza-se um loop foreach 2 vezes(uma pra sexo e outra pra nome) que vai recorrendo cada um dos elementos POST. Em cada interação, vão-se
acedendo a todos os elementos do POST e vão-se guardando em $nome e $sexo o nome do campo
recebido para o formulário e em $valor, o valor que se tinha introduzido no formulário.
Na seguinte linha, onde está a função eval(), executa-se a sentença gerada no passo anterior. A função eval()
executa o conteúdo de uma cadeia de caracteres como se fosse um comando de PHP.
*/
foreach( $_POST as $nome => $valor)
{
   $comando = "$" . $nome . "='" . $valor . "';";
   eval($comando);
}
//criar array com todos os nomes (não consegui fazer de maneira mais pratica)
$Nomes = array( 0 => $nome0,1 => $nome1,2 => $nome2,3 => $nome3,4 => $nome4,5 => $nome5,6 => $nome6, 7=>$nome7 ,8 => $nome8, 9 => $nome9 );


foreach( $_POST as $sexo => $valor)
{
   $comando = "$" . $sexo . "='" . $valor . "';";
   eval($comando);
}
//criar array com todos os sexos
$Sexos = array( 0 => $sexo0,1 => $sexo1,2 => $sexo2,3 => $sexo3,4 => $sexo4,5 => $sexo5,6 => $sexo6, 7=>$sexo7 ,8 => $sexo8, 9=> $sexo9 );

$arquivo1 = 'homem.txt';
$arquivo2 = 'mulher.txt';
$ArquivoAberto1 = fopen($arquivo1, 'a');
$ArquivoAberto2 = fopen($arquivo2, 'a');

for ($j=0; $j < 10; $j++) {
  if ($Sexos[$j] == 1 ) {

    $Sexos[$j] = $Nomes[$j];
    $conteudomasc = $Sexos[$j]."\r\n";
    fwrite($ArquivoAberto1,$conteudomasc);

  }
}

  for ($j=0; $j < 10; $j++) {
    if ($Sexos[$j] == 2 ) {

        $Sexos[$j] = $Nomes[$j];
        $conteudofem = $Sexos[$j]."\r\n";
fwrite($ArquivoAberto2,$conteudofem);
      }
}

fclose($ArquivoAberto1);
fclose($ArquivoAberto2);

 ?>

<h1> Arquivo criado com sucesso! </h1>

</body>
</html>
