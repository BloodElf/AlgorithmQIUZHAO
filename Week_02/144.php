<?php

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
     * @return Integer[]
     */
    function preorderTraversal($root) {
        $result = [];
        $stack = [];
        $stack[] = $root;
        while(!empty($stack)) {
            $node = array_pop($stack);
            $result[] = $node->val;
            if ($node->right != null) { $stack[] = $node->right; }
            if ($node->left != null) { $stack[] = $node->left; }
        }

        return $result;
    }
}

// preorder  current -> left -> right
// 入栈当前节点

// 出栈当前节点
// 入栈右节点 + 入栈左节点