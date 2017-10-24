<p align="center">
    <h1 align="center">Binary tree search example using console</h1>
    <br>
</p>

This is a Binary search example using console

INSTALLATION & EXECUTION

```
Step1:Clone the source code
git clone -b master https://github.com/sirinibin/binarysearch.git

Step2: cd binarysearch
Step4: php index.php elements.csv 45

O/P:

Given elements in sorted order:
1, 3, 23, 26, 31, 45,230, 300

Searching item 300:

Execution flow:


 Step1:Set L to 0 and R to n − 1.

 Step2:If L(=0) > R(=7), the search terminates as unsuccessful.

 Step3: Set m(=3) (the position of the middle element) to the floor (the largest previous integer) of (L(=0) + R(=7)) / 2.

 Step4: As Am(= 26) < T(=300), setting L to m(=3) + 1 and go to step 2.

 Step3: Set m(=5) (the position of the middle element) to the floor (the largest previous integer) of (L(=4) + R(=7)) / 2.

 Step4: As Am(= 45) < T(=300), setting L to m(=5) + 1 and go to step 2.

 Step3: Set m(=6) (the position of the middle element) to the floor (the largest previous integer) of (L(=6) + R(=7)) / 2.

 Step4: As Am(=230) < T(=300), setting L to m(=6) + 1 and go to step 2.

 Step3: Set m(=7) (the position of the middle element) to the floor (the largest previous integer) of (L(=7) + R(=7)) / 2.

Step6: Now Am(= 300) = T(=300), the search is done; return m(=7).

Result:Item is present at index 7