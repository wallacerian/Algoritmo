<html>
<head>
    <meta charset="UTF-8">
    <title>Buble Sort</title>
</head>
<body>
  <h2>Digite Valores</h2>
  <form id="form1" name="form1" method="post" action="index.php">
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
  </form>
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
    echo '<h1>Lista Organizada em Ordem Crescente</h1>';
    for($n=0;$n<5;$n++){
        echo '<td><h3>Numero '.$n.'= '.$vetor[$n].'</h3></td>';
    }
}
   ?>
</body>
</html>
