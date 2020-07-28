<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/29
 * Time: 1:06
 */

// -------------------- 摸鱼做法 --------------------
class Solution {

		/**
		 * @param Integer $N
		 *
		 * @return Integer
		 */
		function fib($N)
		{
				if ($N <= 1)
				{
						return $N;
				}

				return $this->fib($N - 1) + $this->fib($N - 2);
		}
}

// -------------------- 动态规划 --------------------
class Solution {

		/**
		 * @param Integer $N
		 *
		 * @return Integer
		 */
		function fib($N)
		{
				$numOfFib    = [];
				$numOfFib[0] = 0;
				$numOfFib[1] = 1;
				for ($i = 2; $i <= $N; $i++)
				{
						$numOfFib[$i] = $numOfFib[$i - 2] + $numOfFib[$i - 1];
				}

				return $numOfFib[$N];
		}
}

/*
 * 总结:
 * 1. 这题还能套数学公式的。
 * */