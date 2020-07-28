<?php

class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $result = $s;
        for ($i=0;$i<count($indices);$i++){
            $result[$indices[$i]]=$s[$i];
        }
        return $result;
    }
}
