<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Questão 8</title>
    <style>
    body{

              font-family: Verdana;
              background-image: url(../imagens/estados.png);

    }
    div {
        background-color: black;
        color : white;
        width: 450px;
        padding: 25px;
        border: 10px solid #0aabf0;
        margin-left: auto;
        margin-right: auto;

        text-align: center;
    }
    .botao{

    margin: 15px;
    background: #0a7004;
    color: white;
    border-color: #0a7004;
    height: 60px;
    width: 155px;
    cursor: pointer ;
    border-radius: 10px;
    }
    .tabela{
      margin: auto;
      padding: auto;
      color: black;
      text-align: center;
    }
    </style>
    <script>
    function refreshPage(){
    window.location.reload();
  }
  </script>
  </head>
  <body>

    <div>
    <?php
    function Exibir($aray, $cont){
      echo '	<table class = "tabela" border = "1" bgcolor = #000000 >
      <tr><th bgcolor = "orange" texta>ESTADOS</th></tr>';
      for($i = 0; $i < $cont ;$i++){
        echo '<tr><td bgcolor = "#A9BDED">'.$aray[$i] .'</td></tr>';
      }
      echo '</table><br>';
    }
    $Estados = array(
      "Acre (AC)",
      "Alagoas (AL)",
      "Amap&aacute; (AP)",
      "Amazonas (AM)",
      "Bahia (BA)",
      "Cear&aacute; (CE)",
      "Distrito Federal (DF)",
      "Esp&iacute;rito Santo (ES)",
      "Goi&aacute;s (GO)",
      "Maranh&atilde;o (MA)",
      "Mato Grosso (MT)",
      "Mato Grosso do Sul (MS)",
      "Minas Gerais (MG)",
      "Par&aacute; (PA)",
      "Para&iacute;ba (PB)",
      "Paran&aacute; (PR)",
      "Pernambuco (PE)",
      "Piau&iacute; (PI)",
      "Rio de Janeiro (RJ)",
      "Rio Grande do Norte (RN)",
      "Rio Grande do Sul (RS)",
      "Rond&ocirc;nia (RO)",
      "Roraima (RR)",
      "Santa Catarina (SC)",
      "S&atilde;o Paulo (SP)",
      "Sergipe (SE)",
      "Tocantins (TO)"
    );
    Exibir($Estados,27);
    $EstadoSorteado = rand(0,26);

    echo "O Estado sorteado foi: <u>$Estados[$EstadoSorteado]</u>";
    ?>
    <br>
    <button type="submit"  onClick="refreshPage()" class="botao">Clique Aqui Para Sortear</button>
  </div>
  </body>
</html>
