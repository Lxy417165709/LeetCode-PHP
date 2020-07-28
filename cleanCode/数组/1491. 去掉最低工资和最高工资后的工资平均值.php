<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/29
 * Time: 0:56
 */

class Solution {

		/**
		 * @param Integer[] $salary
		 *
		 * @return Float
		 */
		function average($salary) {
				return (array_sum($salary) - min($salary) - max($salary)) / (count($salary) - 2);
		}
}

/*
 * 总结:
 * 1. 计算数组和，可以使用 array_sum 函数。
 * */