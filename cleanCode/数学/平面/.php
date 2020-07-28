<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 12:19
 */

class Solution {

		/**
		 * @param Integer[][] $points
		 *
		 * @return Integer
		 */
		function minTimeToVisitAllPoints($points)
		{
				$minTime = 0;
				for ($i = 1; $i < count($points); $i++)
				{
						$minTime += max(
							abs($points[$i][0] - $points[$i - 1][0]),
							abs($points[$i][1] - $points[$i - 1][1])
						);
				}

				return $minTime;
		}
}

/*
 * 	总结:
 * 	1. 要注意变量前加 $,不然会有意想不到的错误。
 * */