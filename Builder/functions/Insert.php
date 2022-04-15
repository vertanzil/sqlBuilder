<?php

namespace QueryBuilder;
use QueryBuilder\Interfaces\QueryInterface;

include_once ("./Builder/interfaces/QueryInterface.php");


class Insert implements QueryInterface
{
    private $table;
    private $columns = [];
    private $values = [];
    public function __construct(string $table){
        $this->table = $table;
    }

    public function __toString(): string{
        return 'INSERT INTO ' . $this->table
            . ' (' . implode(', ',$this->columns) . ') VALUES (' . implode(', ',$this->values) . ')';
    }
    public function columns(string ...$columns): self{
        $this->columns = $columns;
        return $this;
    }
    public function values(string ...$values): self{
        $this->values = $values;
        return $this;
    }
}
