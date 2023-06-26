<?php

function function1(): never {
    function2();
}

function function2(): never {
    $outro = "outro";
    throw new \Exception("Erro");
}