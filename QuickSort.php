<?php
/**
 * Created by PhpStorm.
 * User: bujar
 * Date: 6/18/18
 * Time: 2:02 PM
 */

class QuickSort
{
    function quick_sort($array)
    {
        // find array size
        $length = count($array);

        // base case test, if array of length 0 then just return array to caller
        if($length <= 1){
            return $array;
        }
        else{

            // select an item to act as our pivot point, since list is unsorted first position is easiest
            $pivot = $array[0];

            // declare our two arrays to act as partitions
            $left = $right = array();

            // loop and compare each item in the array to the pivot value, place item in appropriate partition
            for($i = 1; $i < count($array); $i++)
            {
                if($array[$i] < $pivot){
                    $left[] = $array[$i];
                }
                else{
                    $right[] = $array[$i];
                }
            }

            // use recursion to now sort the left and right lists
            return array_merge($this->quick_sort($left), array($pivot), $this->quick_sort($right));
        }
    }
}

$array = [3,4,2,1];

$q = new QuickSort();
$q = $q->quick_sort($array);
var_dump($q);