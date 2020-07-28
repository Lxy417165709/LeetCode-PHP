<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        return $root === null ? 0 : 1 + max ($this->maxDepth ($root->left), $this->maxDepth ($root->right));
    }
}