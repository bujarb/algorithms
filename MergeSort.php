<?php
/**
 * Created by PhpStorm.
 * User: bujar
 * Date: 6/14/18
 * Time: 3:56 PM
 */

class MergeSort
{
    public function __construct(){

        $array = [1,2,9,54,6,7,8,2,12,32,45,65,21,5];

        $merged = $this->mergeSort($array);

        $string = '';
        $count = 0;

        for ($i=0;$i<=count($array);$i++){
            if ($i != count($array)){
                $string .= $merged[$i].',';
            }else{
                $string .= $merged[$i];
            }
        }

        echo $string;

    }

    function mergeSort($Array)
    {
        $len = count($Array);

        if($len==1){
            return $Array;
        }

        $mid = (int)$len / 2;

        $left = $this->mergeSort(array_slice($Array, 0, $mid));
        $right = $this->mergeSort(array_slice($Array, $mid));

        return $this->merge($left, $right);
    }

    function merge($left, $right)
    {
        $combined = [];
        $totalLeft = count($left);
        $totalRight = count($right);
        $rightIndex = $leftIndex=0;

        while ($leftIndex < $totalLeft && $rightIndex < $totalRight) {
            if ($left[$leftIndex] > $right[$rightIndex]) {
                $combined[]=$right[$rightIndex];
                $rightIndex++;
            }else {
                $combined[] =$left[$leftIndex];
                $leftIndex++;
            }
        }
        while($leftIndex<$totalLeft){
            $combined[]=$left[$leftIndex];
            $leftIndex++;
        }
        while ($rightIndex<$totalRight){
            $combined[] =$right[$rightIndex];
            $rightIndex++;
        }
        return $combined;
    }

}

$m = new MergeSort();