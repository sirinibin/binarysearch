<?php
/*
 * Node class to be used inside the B-tree data structure
 * */
class Node
{
    public $data;
    public $leftChild;
    public $rightChild;

    public function __construct($data)
    {
        $this->data = $data;
        $this->leftChild = null;
        $this->rightChild = null;
    }

    public function disp_data()
    {
        echo $this->data;
    }
}
