<?php
use QueryBuilder\QueryBuilder;
include_once ("Builder/QueryBuilder.php");
include_once("Builder/functions/Select.php");
include_once("Builder/functions/Insert.php");
$query = (new QueryBuilder())
    ->insert('table_name')
    ->columns("1", "2", "3")
    ->values("4", "5", "6");
echo '<br>';
echo $query;

$query2 = (new QueryBuilder())
    ->insert('table_name')
    ->columns("1", "2", "3")
    ->values("4", "5", "6");
echo '<br>';
echo $query2;