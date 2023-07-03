<?php
$amount=40000;
$withdrawal=2000;
if ($withdrawal>$amount)
{
    echo "insufficient funds";
}
else{
    echo"available amount is:".($amount-$withdrawal);
}
?>