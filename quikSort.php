<?php
class quickSort{
    /* low  --> Starting index,  high  --> Ending index */
    public $arr;
    public function __construct($arr) {
        $this->arr = $arr;
    }
    public function qsort($low,$high) {
        if($low===null || $high===null) {
            return false;
        }
        if($low < $high) {
            $pi = $this->partition($low,$high);
            $this->qsort($low,$pi-1); /*before pivot*/
            $this->qsort($pi+1,$high); /*before pivot*/
        }
    }

    /* This function takes last element as pivot, places
       the pivot element at its correct position in sorted
        array, and places all smaller (smaller than pivot)
       to left of pivot and all greater elements to right
       of pivot */
    public function partition($low,$high) {
        if($low===null || $high===null) {
            return false;
        }
        $pivot = $this->arr[$high];
        $i = $low-1; /*index of smaller element*/

        for($j = $low; $j <= $high-1; $j++)
        {
            // If current element is smaller than or equal to pivot

            if($this->arr[$j] <= $pivot)
            {
                $i++;    // increment index of smaller element
                $this->swap($i,$j);
            }
        }
        //swap arr[i + 1] and arr[high])
        $this->swap($i+1,$high);

        return $i+1;
    }

    public function swap($i,$j){
        $p=$this->arr[$i];
        $q=$this->arr[$j];
        $this->arr[$i]=$q;
        $this->arr[$j]=$p;
    }
}
$arr = array(10, 80, 30, 90, 40, 50, 70);
$obj = new quickSort($arr);
$obj->qsort(0,6);
print_r($obj->arr);


?>