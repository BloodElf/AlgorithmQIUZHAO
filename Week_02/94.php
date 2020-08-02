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
    function inorderTraversal($root) {
        //var_export($root);
        $result = [];
        $this->travel($root, $result);
        return $result;
    }

    function travel($node, &$result) {
        if ($node->left != null) {
            $this->travel($node->left, $result);
        }
        // echo $node->val;
        $result[] = $node->val;

        if ($node->right != null) {
            $this->travel($node->right, $result);
        }
        //return $result;
    }
}


//栈 ->
// 栈加入当前节点
// 栈加入左节点
// 栈加入所有左节点的左节点
// 退出栈
// 加入右节点

function inorderTraversal($root) {
    // use stack
    $result = [];
    $stack = [];
    $current = $root;

    while($current != null || !empty($stack)) {
        while($current != null) {
            $stack[] = $current;
            $current = $current->left;
        }

        $current = array_pop($stack);
        $result[] = $current->val;
        $current = $current->right;
    }

    return $result;
}

