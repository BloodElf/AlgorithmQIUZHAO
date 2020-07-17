<?php
class MyCircularDeque {

    public $cap = 0;
    public $len = 0;
    public $data = [];

    /**
     * Initialize your data structure here. Set the size of the deque to be k.
     * @param Integer $k
     */
    function __construct($k) {
        $this->cap = $k;
    }

    /**
     * Adds an item at the front of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertFront($value) {
        if ($this->isFull()) {
            return false;
        }
        array_unshift($this->data, $value);
        return true;
    }

    /**
     * Adds an item at the rear of Deque. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function insertLast($value) {
        if ($this->isFull()) {
            return false;
        }
        array_push($this->data, $value);
        return true;
    }

    /**
     * Deletes an item from the front of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteFront() {
        if ($this->isEmpty()) {
            return false;
        }
        array_shift($this->data);
        return true;
    }

    /**
     * Deletes an item from the rear of Deque. Return true if the operation is successful.
     * @return Boolean
     */
    function deleteLast() {
        if ($this->isEmpty()) {
            return false;
        }

        array_pop($this->data);
        return true;
    }

    /**
     * Get the front item from the deque.
     * @return Integer
     */
    function getFront() {
        if ($this->isEmpty()) {
            return -1;
        }
        return $this->data[0];
    }

    /**
     * Get the last item from the deque.
     * @return Integer
     */
    function getRear() {
        if ($this->isEmpty()) {
            return -1;
        }
        return $this->data[count($this->data) - 1];
    }

    /**
     * Checks whether the circular deque is empty or not.
     * @return Boolean
     */
    function isEmpty() {
        return empty($this->data);
    }

    /**
     * Checks whether the circular deque is full or not.
     * @return Boolean
     */
    function isFull() {
        return count($this->data) == $this->cap ? true : false;
    }
}
/**
 * Your MyCircularDeque object will be instantiated and called as such:
 * $obj = MyCircularDeque($k);
 * $ret_1 = $obj->insertFront($value);
 * $ret_2 = $obj->insertLast($value);
 * $ret_3 = $obj->deleteFront();
 * $ret_4 = $obj->deleteLast();
 * $ret_5 = $obj->getFront();
 * $ret_6 = $obj->getRear();
 * $ret_7 = $obj->isEmpty();
 * $ret_8 = $obj->isFull();
 */