<html>
<head>
    <title>Estudando PHP</title>
</head>
<body>

<?php


$segundos = 134;
echo "$segundos segundos equivale a " .
    gmdate("H:i:s", $segundos);

echo '<br>';
$conexao = new mysqli("localhost", "root",
    "", "estudos");

// testa se a conexão foi efetuada com sucesso
if(mysqli_connect_errno()){
    die("Houve um erro de conexão: " . mysqli_connect_error());
}
else{
    print "Conexão com " . $conexao->host_info
        . " efetuada com sucesso.";
}

// fecha a conexão com o banco de dados
$conexao->close(); // fecha a conexão
  // função que permite ordenar um vetor de inteiros
  // usando a ordenação Insertion Sort
  // Note a passagem do vetor como referência
  function insertionSort(&$vetor){
    // este laço varre os elementos a partir do segundo
    // elemento, ou seja, o índice 1
    for($i = 1; $i < count($vetor); $i++){
      // guardamos o elemento atual em temp
      $temp = $vetor[$i];

      for($j = $i; (($j > 0) && ($vetor[$j - 1] > $temp)); $j--){
$vetor[$j] = $vetor[$j - 1]; // houve uma troca
}

$vetor[$j] = $temp; // colocamos temp em seu devido lugar
}
}

// vamos testar a ordenação agora
$valores = array(4, 6, 2, 8, 1, 9, 3, 0, 11);

// imprime a matriz sem a ordenação
echo "Sem ordenação:<br>";
for($i = 0; $i < count($valores); $i++){
echo $valores[$i] . "  ";
}

// vamos ordenar a matriz
insertionSort($valores);

// imprime a matriz ordenada
echo "<br><br>Ordenada usando Insertion Sort:<br>";
for($i = 0; $i < count($valores); $i++){
echo $valores[$i] . "  ";
}

/*
  Este exemplo mostra como usar a função
  array_shift() para extrair e retornar o primeiro
  elemento de um array
*/

$pessoas[0] = "Carlos";
$pessoas[1] = "Juliana";
$pessoas[2] = "Igor";
$pessoas[3] = "Marcelo";

// extrai o primeiro elemento
$primeiro = array_shift($pessoas);
echo "O elemento extraido foi: " . $primeiro . "<br>";

// vamos nos certificar de que o primeiro elemento
// foi realmente removido
echo "O array contém agora " . count($pessoas) . " elementos";

?>

</body>
</html>
