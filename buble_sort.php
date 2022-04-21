<html>
<head>
    <meta charset="UTF-8">
    <title>Buble Sort</title>
</head>
<body>
<h2>Digite Valores</h2>
<form id="form1" name="form1" method="post" action="buble_sort.php">
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

// if Para Tirar os Erros
if ($_POST['num1'] = '') {
    return $vet;
}

if ($_POST['num2'] = '') {
    return $vet;
}

echo "<pre>";
// Array to be sorted
print_r($vet);
// Sorted Array
print_r(bubble_sort($vet));
echo "<pre>";

function bubble_sort($vet){
    // Bubble sorting
    $array_count = count($vet);
    for($x = 0; $x < $array_count; $x++){
        for($a = 0 ;  $a < $array_count - 1 ; $a++){
            if($a < $array_count ){
                if($vet[$a] > $vet[$a + 1] ){
                    swap($vet, $a, $a+1);
                }
            }
        }
    }
    return $vet;
}

function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}


?>
</body>
</html>
<?php
$sortarr = array(3,5,15,3,2,6,7,50,1,4,5,2,100,9,3,2,6,7,13,18);

echo "<pre>";
    // Array to be sorted
    print_r($sortarr);
    // Sorted Array
    print_r(bubble_sort($sortarr));
    echo "<pre>";

    function bubble_sort($sortarr){
        // Bubble sorting
        $array_count = count($sortarr);
        for($x = 0; $x < $array_count; $x++){
            for($a = 0 ;  $a < $array_count - 1 ; $a++){
                if($a < $array_count ){
                    if($sortarr[$a] > $sortarr[$a + 1] ){
                            swap($sortarr, $a, $a+1);
                    }
                }
            }
        }
        return $sortarr;    
    }

    function swap(&$arr, $a, $b) {
        $tmp = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $tmp;
    }
