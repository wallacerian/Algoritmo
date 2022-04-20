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