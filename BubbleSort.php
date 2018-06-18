<?php
/**
 * Created by PhpStorm.
 * User: bujar
 * Date: 6/14/18
 * Time: 3:55 PM
 */

class BubbleSort
{

    public function __construct(){
        $array = [4,3,2,1];
        $array = $this->bubleSort($array);
        print_r($array);
    }

    public function bubleSort($array){

        try{

            $cArray = $array;

            for ($j=0;$j<count($cArray);$j++){

                $newArray = $cArray;

                for($i=0;$i<count($newArray);$i++){

                    $next = $i+1;

                    if ($next < count($newArray)){

                        if ($newArray[$i] > $newArray[$next]){

                            $nextEl = $newArray[$next];
                            $currentEl = $newArray[$i];
                            $newArray[$i] = $nextEl;
                            $newArray[$next] = $currentEl;

                        }
                    }
                }

                $cArray = $newArray;

            }

            return $cArray;

        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}

$b = new BubbleSort();