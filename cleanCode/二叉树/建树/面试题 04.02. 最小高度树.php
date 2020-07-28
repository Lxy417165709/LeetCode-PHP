<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 13:31
 */

class Solution {

		/**
		 * @param Integer[] $nums
		 *
		 * @return TreeNode
		 */
		function sortedArrayToBST($nums)
		{
				return $this->getSortedArrayToBST($nums, 0, count($nums) - 1);
		}

		function getSortedArrayToBST($nums, $left, $right)
		{
				if ($left > $right)
				{
						return NULL;
				}
				$mid         = floor(($left + $right) / 2);
				$root        = new TreeNode($nums[$mid]);
				$root->left  = $this->getSortedArrayToBST($nums, $left, $mid - 1);
				$root->right = $this->getSortedArrayToBST($nums, $mid + 1, $right);

				return $root;
		}
}

/*
 * 注意:
 * 1. PHP类的成员变量，访问时不需要加 $ 前缀。
 * */