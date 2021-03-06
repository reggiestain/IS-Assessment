<?php

/**
 * Assessment.php
 * @author    Reginald Quarcoo Bossman <reggiestain@gmail.com>
 * @version 1.0      
 */

namespace ISAssessment;

/**
 * Internet Solutions - Technical Assessment class
 * @package name 
 */
class Assessment {

    /**
     * Implement a function closestToZero
     * 
     * @param type $arrayValues
     * @return int|float
     */
    function closestToZero($arrayValues = array(7, -10, 13, 8, 4, -7.2, -12, -3.7, 3.5, -9.6, 6.5, -1.7, -6.2, 7)) {

        $lowest = abs($arrayValues[0]);

        for ($i = 1; $i < count($arrayValues) - 1; $i++) {

            $lowest = ( $lowest < abs($arrayValues[$i]) ) ? $lowest : $arrayValues[$i];
        }

        return $lowest;
    }

    /**
     * Compute the sum of the numbers in a given list using a for-loop
     * 
     * @param type $arr
     * @return int
     */
    function forLoop($arr = array(12, 3, 4, 15)) {
        $ArrSize = sizeof($arr);
        $sum = 0;
        for ($i = 0; $i < $ArrSize; $i++)
            $sum += $arr[$i];

        return $sum;
    }

    /**
     * Compute the sum of the numbers in a given list using a while-loop
     * 
     * @param type $arr
     * @return int
     */
    function whileLoop($arr = array(12, 3, 4, 15)) {
        $arrSize = sizeof($arr);
        $i = 0;
        $sum = 0;
        while ($i < $arrSize) {
            $sum += $arr[$i];
            $i++;
        }
        return $sum;
    }

    /**
     * Compute the sum of the numbers in a given list using recursion
     * 
     * @param type $numberArr
     * @param type $arrSize
     * @return int
     */
    function recursiveFunction($numberArr, $arrSize) {
        if ($arrSize <= 0)
            return 0;
        return ($this->recursiveFunction($numberArr, $arrSize - 1) + $numberArr[$arrSize - 1]);
    }

    /**
     * Combines two lists by alternatively taking elements
     * 
     * @param type $arr1
     * @param type $arr2
     * @return array
     */
    function combineArrays($arr1 = ['a', 'b', 'c'], $arr2 = [1, 2, 3]) {
        $newArr = array();
        for ($i = 0; $i < count($arr1); $i++) {
            $newArr[] = $arr1[$i];
            $newArr[] = $arr2[$i];
        }

        return $newArr;
    }

    /**
     * * Computes the list of the first 100 Fibonacci numbers
     * 
     * @param type $number
     */
    function fibonacci($number) {
        $cur = 1;
        $prev = 0;
        for ($i = 0; $i < $number; $i++) {
            yield $cur;

            $temp = $cur;
            $cur = $prev + $cur;
            $prev = $temp;
        }
    }

    /**
     * Finds the lowest absolute sum of elements
     * @param type $arr
     * @return int
     */
    function absoluteSum($arr = array(5, 10, 1, 4, 8, 7)) {
        $n = sizeof($arr);

        sort($arr);
        sort($arr, $n);

        $sum = 0;
        $sum += abs($arr[0] - $arr[1]);

        $sum += abs($arr[$n - 1] - $arr[$n - 2]);

        for ($i = 1; $i < $n - 1; $i++)
            $sum += min(abs($arr[$i] - $arr[$i - 1]), abs($arr[$i] - $arr[$i + 1]));

        return $sum;
    }

}
