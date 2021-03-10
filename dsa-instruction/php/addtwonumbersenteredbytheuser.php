/**
Step 1: Start
Step 2: Declare variables num1, num2 and sum.
Step 3: Read values num1 and num2.
Step 4: Add num1 and num2 and assign the result to sum.
sum←num1+num2
Step 5: Display sum
Step 6: Stop
*/

<?php

echo "Algorithm 1: Add two numbers entered by the user (PHP) \n";
$num1 = $num2 = $sum = 0;
echo "Please Input num1 = ";
fscanf(STDIN, "%d", $num1);
echo "Please Input num2 = ";
fscanf(STDIN, "%d", $num2);
$sum = $num1 + $num2;
echo "Result " . $num1 . " + " . $num2 . " = " . $sum . "\n";