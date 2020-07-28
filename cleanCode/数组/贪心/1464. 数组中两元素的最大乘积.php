<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 12:27
 */

class Solution {

		/**
		 * @param Integer[] $nums
		 *
		 * @return Integer
		 */
		function maxProduct($nums)
		{
				sort($nums);

				return ($nums[count($nums) - 1] - 1) * ($nums[count($nums) - 2] - 1);
		}
}

/*
 * 总结:
 * 1. 这题还能使用随机选择算法，将时间复杂度优化为 O(n)。
 * */