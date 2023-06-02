<?php
$operand1 = 7;
$operand2 = 2;
$count = 0;
while ($operand1 >= $operand2) {
	$count++;
    $operand1 -= $operand2;
}

echo "Hasil Pembagian = $count";
