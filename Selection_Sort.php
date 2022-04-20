<html>
<head>
    <meta charset="UTF-8">
    <title>Buble Sort</title>
</head>
<body>
  <h2>Digite Valores</h2>
  <form id="form1" name="form1" method="post" action="Selection_Sort.php">
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

selection_sort($vet);

function selection_sort($vet)
   {
       for($i=0; $i<count($vet)-1; $i++) {
           $min = $i;
           for($j=$i+1; $j<count($vet); $j++) {
               if ($vet[$j]<$vet[$min]) {
                   $min = $j;
               }
           }
           $vet = swap_positions($vet, $i, $min);
       }
       return $vet;
   }

   function swap_positions($data1, $left, $right) {
       $backup_old_data_right_value = $data1[$right];
       $data1[$right] = $data1[$left];
       $data1[$left] = $backup_old_data_right_value;
       return $data1;
      echo set_time_limit();
   }
   $my_array = array(3, 0, 2, 5, -1, 4, 1);
   echo "Original Array :\n";
   echo implode(', ',$my_array );
   echo "\nSorted Array :\n";
   echo implode(', ',selection_sort($my_array)). PHP_EOL;
   ?>
</body>
</html>