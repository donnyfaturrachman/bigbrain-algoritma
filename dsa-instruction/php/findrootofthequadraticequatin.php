/**
Step 1: Start
Step 2: Declare variables a, b, c, D, x1, x2, rp and ip;
Step 3: Calculate discriminant
D ← b2-4ac
Step 4: If D ≥ 0
r1 ← (-b+√D)/2a
r2 ← (-b-√D)/2a
Display r1 and r2 as roots.
Else
Calculate real part and imaginary part
rp ← -b/2a
ip ← √(-D)/2a
Display rp+j(ip) and rp-j(ip) as roots
Step 5: Stop
*/

<?php

echo "Algorithm 3: Find Root of the quadratic equatin ax2 + bx + c = 0 (PHP) \n";
$a = $b = $c = $D = $x1 = $x2 = $rp = $ip = 0;

$D = ($b * 2) - (4 * $a * $c);
if ($D >= 0) {
    $x1 = (-$b + sqrt($D)) / (2 * $a);
    $x2 = (-$b - sqrt($D)) / (2 * $a);
    echo "x1 = " . $x1 . " x2 = " . $x2 . "\n";
} else {
    $rp = -$b / (2 * $a);
    $ip = sqrt(-$D) / (2 * $a);
    echo "rp = " . $rp . " ip = " . $ip . "\n";
}
