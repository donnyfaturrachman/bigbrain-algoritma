/**
Step 1: Start
Step 2: Declare variables a,b and c.
Step 3: Read variables a,b and c.
Step 4: If a > b
If a > c
Display a is the largest number.
Else
Display c is the largest number.
Else
If b > c
Display b is the largest number.
Else
Display c is the greatest number.
Step 5: Stop
*/

<?php

echo "Algorithm 2: Find the largest number among three numbers (PHP) \n";
$a = $b = $c = 0;
echo "Please Input a = ";
fscanf(STDIN, "%d", $a);
echo "Please Input b = ";
fscanf(STDIN, "%d", $b);
echo "Please Input c = ";
fscanf(STDIN, "%d", $c);

if ($a > $b) {
    if ($a > $c) {
        echo "Largest Number a = " . $a . "\n";
    } else {
        echo "Largest Number c = " . $c . "\n";
    }
} else {
    if ($b > $c) {
        echo "Largest Number b = " . $b . "\n";
    } else {
        echo "Largest Number c = " . $c . "\n";
    }
}
