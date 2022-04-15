<?php
use QueryBuilder\QueryBuilder;
include_once ("Builder/QueryBuilder.php");
include_once("Builder/functions/Select.php");
include_once("Builder/functions/Insert.php");
$query = (new QueryBuilder())
    ->insert('COALESCE (count(clue.id))')
    ->columns("1", "2", "3")


;
echo '<br>';
echo $query;