<html>
<head>
    <meta charset="UTF-8">
    <title>Buble Sort</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Selecionando Elementos #01</title>
    <link rel='stylesheet' href='css/estilo.css'>
    <script src='js/jquery.js'></script>
    <style>
        .negrito {
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input,
        form select,
        form button {
            margin: 10px;
            font-size: 1.6em;
        }
    </style>
</head>

<body class='conteudo exercicio'>
<h1>Selecionando Algoritmo De Ordenação</h1>

<form>
    <input type='text' name="num1" id="num1">
    <input type='password' name="num2" id="num2">
    <input type='checkbox' name='check1'>
    <input type='radio' name='radio1'>
    <?= 'Algoritmo Buble Sort' ?>
</form>

<script>

</script>
</body>
 <!-- <form id="form1" name="form1" method="post" action="index.php">
 // Pra Testar
  <label>
      <input type="text" name="num1" id="num1">
  </label>
  <label>
      <input type="text" name="num2" id="num2">
  </label>
  <label>
      <input type="text" name="num3" id="num3">
  </label>
  <label>
      <input type="text" name="num4" id="num4">
  </label>
  <label>
      <input type="text" name="num5" id="num5">
  </label>
  <label>
      <input type="submit" name="bt1" id="bt1">
  </label>
      <a href="Selection_Sort.php">Selection</a>
  </form>-!>
   <?php
   $vet[0]=$_POST['num1'];
   $vet[1]=$_POST['num2'];
   $vet[2]=$_POST['num3'];
   $vet[3]=$_POST['num4'];
   $vet[4]=$_POST['num5'];

bubbleSort($vet);

function bubbleSort($vetor) {
    for($cont1=0;$cont1<5;$cont1++) {
        for ($cont2=0;$cont2<4;$cont2++) {
            if ($vetor[$cont2+1]<=$vetor[$cont2]) {

                $aux=$vetor[$cont2];
                $vetor[$cont2]=$vetor[$cont2+1];
                $vetor[$cont2+1]=$aux;
            }
        }
        $lista[$cont1]=$aux;
    }
    echo set_time_limit($vetor);
    echo '<h1>Lista Organizada em Ordem Crescente</h1>';
    for($n=0;$n<5;$n++){
        echo '<td><h3>Numero '.$n.'= '.$vetor[$n].'</h3></td>';
    }
}
   ?>
</body>
</html>
