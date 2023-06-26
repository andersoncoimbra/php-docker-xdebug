<?php

require "FlatArray.php";

$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$flatArray = new FlatArray($array);

foreach($flatArray as $item){
    echo $item . PHP_EOL;
}
