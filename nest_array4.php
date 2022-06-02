<?php
$people=["name"=>"佐藤","name"=>"鈴木"];
// $people2[0]="佐藤";
// $people2[0]="鈴木";

// $people=["name"=>"佐藤","blood"=>"A"];
// $people[]=["name"=>"佐藤"];
// $people[]=["name"=>"鈴木"];


foreach($people as $key=>$value){
    echo $key.":".$value;
}