<?php
require_once("Node.php");

/*
 * Binary tree class
 * */

class BinaryTree
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    /**
     * function to display the tree
     */
    public function display()
    {
        $this->display_tree($this->root);
    }

    public function display_tree($local_root)
    {
        if ($local_root == null) {
            return;
        }
        $this->display_tree($local_root->leftChild);
        echo $local_root->data;
        $this->display_tree($local_root->rightChild);
    }

    /**
     * function to insert a new node
     */
    public function insert($key)
    {
        $newnode = new Node($key);
        if ($this->root == null) {
            $this->root = $newnode;

            return;
        } else {
            $current = $this->root;
            while (true) {
                $parent = $current;
                if ($key <= $current->data) {
                    $current = $current->leftChild;
                    if ($current == null) {
                        $parent->leftChild = $newnode;

                        return;
                    }//end if2
                } else {
                    $current = $current->rightChild;
                    if ($current == null) {
                        $parent->rightChild = $newnode;

                        return;
                    }
                }
            }
        }
    }

    /**
     * function to search a particular Node
     */
    public function find($key)
    {
        $current = $this->root;
        echo "\nChecking root Node:" . $current->data;

        while ($current->data != $key) {

            if ($key <= $current->data) {

                echo "\nNot found,so moving to the left child of Node:" . $current->data . " as Search item " . $key . " is <= Node " . $current->data;
                $current = $current->leftChild;

            } else {
                echo "\nNot found,so moving to the right child of Node:" . $current->data . " as Search item " . $key . " is > Node " . $current->data;

                $current = $current->rightChild;
            }
            if ($current == null) {
                echo "\n\nResult:Sorry!.Search Item not found in B-tree\n\n";
                return (null);
            }

            echo "\n\nChecking Node:" . $current->data;
        }

        echo "\nResult:Item found in Node:" . $current->data . "\n\n";
        return ($current->data);
    }


    public function is_empty()
    {
        return $this->root === null;
    }
}