<html>
<head>
    <meta charset="UTF-8">
    <title>Buble Sort</title>
</head>
<body>
<h2>Digite Valores</h2>
<form id="form1" name="form1" method="post" action="insertSort.php">
    <label>
        <input type="text" name="num1" id="num1">
    </label>
    <label>
        <input type="text" name="num2" id="num2">
    </label>
    <label>
        <input type="submit" name="bt1" id="bt1">
    </label>
</form>

<?php

$vet[0]= $_POST['num1'];
$vet[1]= $_POST['num2'];

function insert($vet)
{
for($i=0;$i<count($vet);$i++) {
$val = $vet[$i];
$j = $i-1;
while($j>=0 && $vet[$j] > $val) {
    $vet[$j+1] = $vet[$j];
$j--;
}
    $vet[$j+1] = $val;
}
return $vet;
}
echo "Original Array :\n";
echo implode(', ',$vet );
echo "\nSorted Array :\n";
print_r(insert($vet));
?>
</body>
</html>
<?php
function insert($my_array)
{
for($i=0;$i<count($my_array);$i++) {
$val = $my_array[$i];
$j = $i-1;
while($j>=0 && $my_array[$j] > $val) {
$my_array[$j+1] = $my_array[$j];
$j--;
}
$my_array[$j+1] = $val;
}
return $my_array;
}
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
print_r(insert($test_array));
