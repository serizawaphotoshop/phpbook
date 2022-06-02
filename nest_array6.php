<?php
$people[]=["name"=>"佐藤","blood"=>"A"];
$people[]=["name"=>"鈴木","blood"=>"B"];
$people[]=["name"=>"高橋","blood"=>"O"];

foreach($people as $key=>$value){
    echo "名前は".$value["name"]."です";
}