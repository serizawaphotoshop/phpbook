<?php
function tax(int $price):float{
    return $price*1.1;
}

$sample_price=tax('文字列');

echo "税込みの値段".$sample_price."円";

