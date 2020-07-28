<?php
/**
 * Created by PhpStorm.
 * User: hasee
 * Date: 2020/7/28
 * Time: 14:37
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

		var $dummyRoot;
		var $curNode;

		/**
		 * @param TreeNode $root
		 *
		 * @return TreeNode
		 */
		function increasingBST($root)
		{
				$this->dummyRoot = new TreeNode();
				$this->curNode   = $this->dummyRoot;
				$this->formDummyRoot($root);

				return $this->dummyRoot->right;
		}

		function formDummyRoot($root)
		{
				if ($root == NULL)
				{
						return;
				}
				$this->formDummyRoot($root->left);
				$this->curNode->right = $root;
				$root->left           = NULL;
				$this->curNode        = $this->curNode->right;
				$this->formDummyRoot($root->right);
		}
}

/*
 * 题目链接: https://leetcode-cn.com/problems/increasing-order-search-tree/submissions/
 * 总结:
 * 1. 这题就是考查了中序遍历。
 * */