<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 13:57
 */

class Solution {

		/**
		 * @param Integer $n
		 *
		 * @return String
		 */
		function generateTheString($n)
		{
				$s = "";
				if ($n % 2 == 0)
				{
						$n--;
						$s .= 'a';
				}
				for ($i = 0; $i < $n; $i++)
				{
						$s .= 'b';
				}

				return $s;
		}
}

/*
 * 总结:
 * 1. 水题中的水题。
 * */