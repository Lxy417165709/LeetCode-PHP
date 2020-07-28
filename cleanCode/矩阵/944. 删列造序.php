<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/29
 * Time: 0:52
 */

class Solution {

		/**
		 * @param String[] $A
		 *
		 * @return Integer
		 */
		function minDeletionSize($A)
		{
				$countOfUnOrderCol = 0;
				for ($t = 0; $t < strlen($A[0]); $t++)
				{
						for ($i = 1; $i < count($A); $i++)
						{
								if ($A[$i][$t] < $A[$i - 1][$t])
								{
										$countOfUnOrderCol++;
										break;
								}
						}
				}

				return $countOfUnOrderCol;
		}
}

/*
 * 总结:
 * 1. 记得数组变量前要加$。
 * */