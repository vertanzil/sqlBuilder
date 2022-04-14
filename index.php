<?php

use SqlBuilder\SqlBuilder;


echo "This is a test";


$sqlBuilder = new SqlBuilder();


$sqlBuilder
    ->select("*")
    ->where("this = < 22");

$sqlBuilder->toString();
