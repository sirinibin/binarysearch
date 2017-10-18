<?php
require_once("BinaryTree.php");

Class App
{
    public static function run($argv)
    {

        self::validateArguments($argv);

        $elements_file = $argv[1];
        $search_item = $argv[2];

        /*
         * Declaring a binary tree object
         * */

        $b = new BinaryTree;

        /*
         * Extract elements from .csv file to insert
         */
        $contents = file_get_contents($elements_file);
        $elements = explode(",", $contents);


        /*
         * Inserting elements to the B-tree
         */
        foreach ($elements as $e) {
            $b->insert($e);
        }

        /*
         * Display the given binary tree elements(keys)
         */
        echo "\nGiven B-tree elements:\n";
        $b->display();

        /*
         * Searching
         */
        echo "\n\nSearching item " . $search_item . ":\n";
        $b->find($search_item);

    }

    public static function validateArguments($argv)
    {
        /*
         * Checking Arguments count==2
         * */
        if ((count($argv) - 1) != 2) {
            throw new Exception('Expecting 2 arguments(eg: elements.csv <search_item>)');
        }
        /*
         * Validate Argument 1:elements.csv exist or not
         * */
        if (isset($argv[1]) && !file_exists($argv[1])) {
            throw new Exception($argv[1] . " file doesn't exist");
        }
        /*
         * Validate Argument 2:checking numeric or not
         * */
        if (isset($argv[2]) && !is_numeric($argv[2])) {
            throw new Exception("2nd Argument should be numeric");
        }
    }
}
