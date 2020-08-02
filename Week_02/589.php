<?php
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root) {
        $result = [];
        // 使用栈来遍历树
        $stack = [];
        $stack[] = $root;
        while(!empty($stack)) {
            $node = array_pop($stack);
            $result[] = $node->val;
            $subCount = count($node->children);
            for ($i = $subCount - 1; $i >= 0; $i--) {
                $stack[] = $node->children[$i];
            }
        }
        return $result;
    }
}