<?php

use sqlBuilder\sqlBuilder;

echo "This is a test";


$sqlBuilder = new sqlBuilder();


$sqlBuilder
    ->select("*")
    ->where("this = < 22");

$sqlBuilder->toString();
