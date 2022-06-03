<?php
function tax($price){
    return $price*1.1;
}

$sample_price=tax(100);

echo "税込み価格は".$sample_price."円です";