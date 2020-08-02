<?php

 // * Definition for a Node.
 class Node {
      public $val = null;
      public $children = null;
      function __construct($val = 0) {
          $this->val = $val;
          $this->children = array();
      }
  }


class Solution {
    public $result = [];
    /**
     * @param Node $root
     * @return integer[]
     */
    function postorder($root) {
        if (empty($root->children)) {
            $this->result[] = $root->val;
            return $this->result;
        }
        foreach ($root->children as $node) {
            $this->postorder($node);
        }
        $this->result[] = $root->val;
        return $this->result;
    }
}

$s = new Solution();
$re = $s->postorder(new Node(null));

var_dump($re);