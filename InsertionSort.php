<?php
/**
 * Created by PhpStorm.
 * User: bujar
 * Date: 6/18/18
 * Time: 12:00 PM
 */

class InsertionSort
{
    public function __construct(){}

    public function insertionSort(){

        $array = [2,3,4,1];

        for ($i=0;$i<count($array);$i++){
            $val = $array[$i];
            $j = $i-1;

            while($j>=0 && $array[$j] > $val){
                $array[$j+1] = $array[$j];
                $j--;
            }

            $array[$j+1] = $val;
        }

        return $array;
    }
}

$i = (new InsertionSort())->insertionSort();
foreach ($i as $item) {
    echo $item.',';
}