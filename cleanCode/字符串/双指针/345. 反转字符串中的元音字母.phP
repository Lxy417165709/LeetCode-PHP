<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $left = (int)0;
        $right = (int)(strlen($s)-1);
        while($left<=$right){
            while($left<=$right && !$this->isVowels($s[$left])){
                $left++;
            }
            while($left<=$right && !$this->isVowels($s[$right])){
                $right--;
            }
            if ($left<=$right) {
                $s = $this->swapChar($s,$left,$right);
                $left++;
                $right--;
            }
        }
        return $s;
    }

    function isVowels($byte) {
        $vowels = array('a','e','i','o','u');
        for($i=0;$i<count($vowels);$i++){
            if ($vowels[$i] === strtolower($byte)){
                return true;
            }
        }
        return false;
    }

    function swapChar($s,$index1,$index2) {
        $tmp = $s[$index1];
        $s[$index1] = $s[$index2];
        $s[$index2]=$tmp;
        return $s;
    }
}