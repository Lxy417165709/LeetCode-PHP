<?php

/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 14:06
 */
class Solution {

		/**
		 * @param String $s
		 *
		 * @return String
		 */
		function replaceSpace($s)
		{
				$finalString    = "";
				$indexOfReading = strlen($s) - 1;
				while ($indexOfReading >= 0)
				{
						if ($s[$indexOfReading] == ' ')
						{
								$finalString = '%20'.$finalString;
						} else
						{
								$finalString = $s[$indexOfReading].$finalString;
						}
						$indexOfReading--;
				}

				return $finalString;
		}
}


// -------------------------- 娱乐一下 --------------------------
class Solution {

		/**
		 * @param String $s
		 *
		 * @return String
		 */
		function replaceSpace($s)
		{
				return str_replace(' ', '%20', $s);
		}
}


/*
 * 题目链接: https://leetcode-cn.com/problems/ti-huan-kong-ge-lcof/
 * 总结:
 * 1. 上面的代码是最Low的解法，更好的解法是新建数组字符串，之后再进行填充，这种方法可以避免新开个字符串。
 * 			 (PHP的字符串API还不太懂)
 * */