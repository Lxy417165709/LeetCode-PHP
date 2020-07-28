<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 13:42
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

		/**
		 * @param TreeNode $root
		 * @param Integer  $L
		 * @param Integer  $R
		 *
		 * @return Integer
		 */
		function rangeSumBST($root, $L, $R)
		{
				if ($root == NULL)
				{
						return 0;
				}
				if ($root->val >= $L && $root->val <= $R)
				{
						return $root->val + $this->rangeSumBST($root->left, $L, $root->val)
							+ $this->rangeSumBST($root->right, $root->val, $R);
				}
				if ($root->val > $R)
				{
						return $this->rangeSumBST($root->left, $L, $R);
				}
				if ($root->val < $L)
				{
						return $this->rangeSumBST($root->right, $L, $R);
				}
				die();
		}
}

/*
 * 题目链接: https://leetcode-cn.com/problems/range-sum-of-bst/
 * */