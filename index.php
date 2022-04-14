<?php
use QueryBuilder\QueryBuilder;
include_once ("Builder/QueryBuilder.php");
include_once ("Builder/Select.php");
$query = (new QueryBuilder())
    ->select('COALESCE (count(clue.id))')
    ->from('database')
    ->where("type=" . " 'something'");
echo '<br>';
echo $query;