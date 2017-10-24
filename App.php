<?php

Class App
{
    public static function run($argv)
    {

        self::validateArguments($argv);

        $elements_file = $argv[1];
        $search_item = $argv[2];

        /*
         * Extract elements from .csv file to insert
         */
        $contents = file_get_contents($elements_file);
        $elements = explode(",", $contents);

        /*
         * Sortig elements
         */
        sort($elements);

        /*
         * Display the given binary tree elements(keys)
         */
        echo "\nGiven elements in sorted order:\n";

        echo implode(",", $elements);

        /*
         * Binary Search
         */
        echo "\n\nSearching item " . $search_item . ":\n";

        $index = self::binarySearch($elements, $search_item);
        if ($index === NULL) {
            echo "\n\nResult:Item Not found\n\n";
        } else {
            echo "\n\nResult:Item found at index " . $index . "\n\n";
        }

    }

    public static function binarySearch($elements, $search_item)
    {

        echo "\nExecution flow:\n\n";
        echo "\n Step1:Set L to 0 and R to n − 1.";
        $L = 0;
        $R = count($elements) - 1;
        $T = $search_item;
        $A = $elements;

        echo "\n\n Step2:If L(=" . $L . ") > R(=" . $R . "), the search terminates as unsuccessful.";

        while ($L <= $R) {

            $m = (int)(($L + $R) / 2);

            echo "\n\n Step3: Set m(=" . $m . ") (the position of the middle element) to the floor (the largest previous integer) of (L(=" . $L . ") + R(=" . $R . ")) / 2.";


            if ($A[$m] < $T) {

                echo "\n\n Step4: As Am(=" . $A[$m] . ") < T(=" . $T . "), setting L to m(=" . $m . ") + 1 and go to step 2.";
                $L = $m + 1;
            } else if ($A[$m] > $T) {

                echo "\n\n Step5: As Am(=" . $A[$m] . ") > T(=" . $T . "), set R to m − 1 and go to step 2.";
                $R = $m - 1;

            } else if ($A[$m] == $T) {

                echo "\n\nStep6: Now Am(=" . $A[$m] . ") = T(=" . $T . "), the search is done; return m(=" . $m . ").";

                return $m;
            }

        }
        return NULL;

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
