<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 12:50
 */

class Solution {

		/**
		 * @param Integer[] $startTime
		 * @param Integer[] $endTime
		 * @param Integer   $queryTime
		 *
		 * @return Integer
		 */
		function busyStudent($startTime, $endTime, $queryTime)
		{
				$maxEndTime     = max($endTime) + 1;
				$countOfStudent = count($startTime);
				$writingChange  = array_fill(0, $maxEndTime + 1, 0);
				for ($i = 0; $i < $countOfStudent; $i++)
				{
						$writingChange[$startTime[$i]]++;
						$writingChange[$endTime[$i] + 1]--;
				}
				$writingStudent = array_fill(0, $maxEndTime + 1, 0);
				for ($i = 1; $i <= $maxEndTime; $i++)
				{
						$writingStudent[$i] = $writingStudent[$i - 1] + $writingChange[$i];
				}
				return $queryTime > $maxEndTime ? 0 : $writingStudent[$queryTime];
		}
}
/*
 * 题目链接: https://leetcode-cn.com/problems/number-of-students-doing-homework-at-a-given-time/
 * 总结:
 * 1. 上面的解法有利于多次查询，但如果只有一次查询的话，其实不需要上面那么复杂，只要判断学生是否在学习就可以了。
 * 2. 这题还能用二分做。
 * */