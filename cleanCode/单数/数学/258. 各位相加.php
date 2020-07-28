<?php

// ------------------------- 使用循环的做法 -------------------------
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        $sum = 0;
        while(($sum = $this->getSumOfDigits($num))>=10){
            $num = $sum;
        }
        return $sum;
    }

    function getSumOfDigits($num) {
        $sum = 0;
        while($num!==0){
            $sum+=$num%10;
            $num=(int)($num/10);
        }
        return $sum;
    }
}

// ------------------------- 不使用循环的做法(数学做法) -------------------------
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        if ($num>=10){
            $num %= 9;
            if ($num===0){
                return 9;
            }
        }
        return $num;
    }
}

// ------------------------- 更厉害的做法 -------------------------
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        return ($num-1)%9+1;
    }
}
