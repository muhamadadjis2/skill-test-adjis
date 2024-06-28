<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendTestContoller extends Controller
{
    public function randomStr($input = "aaabbcccddeddbzaa")
    {
        $charCount = [];

        for ($i=0; $i < strlen($input) ; $i++) { 
            if (isset($charCount[$input[$i]])) {
                $charCount[$input[$i]]++;
            } else {
                $charCount[$input[$i]] = 1;
            }
        }

        $result = '';
        $seenCharacters = [];
        for ($i=0; $i < strlen($input) ; $i++) { 
            if (!in_array($input[$i], $seenCharacters)) {
                $result .= $input[$i] . $charCount[$input[$i]];
                $seenCharacters[] = $input[$i];
            }
        }
        return $result;
    }

    public function sortingArray()
    {
        $array = array(9,3,7,8,2,6,1,4,10,2,2,3);
        $length = count($array);
        $temp = [];

        for ($i = 0; $i < $length; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $length; $j++) { 
                if ($array[$j] < $array[$minIndex]) {
                    $minIndex = $j;
                }
            }

            $tempValue = $array[$minIndex];
            $array[$minIndex] = $array[$i];
            $array[$i] = $tempValue;
        }

        $temp = $array;

        foreach ($array as $value) {
            echo $value. " ";
        }
        echo " \n";
    }

    public function priceCount()
    {
        $stuffA = 99900;
        $stuffB = 49900;

        $discount = 0;
        $date = date('l');

        dd($date);
    }
}
