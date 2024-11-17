<?php
function calculateVAT($amount, $vatRate = 15) {
    return ($amount * $vatRate) / 100;
}

$amount = 1000; 

$vat = calculateVAT($amount);

$totalAmount = $amount + $vat;

echo "Original amount: $amount\n";
echo "VAT (15%): $vat\n";
echo "Total amount including VAT: $totalAmount\n";
?>
