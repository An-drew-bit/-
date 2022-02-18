<?php

namespace classes;

use interfaces\IQueryBuiler;

class MysqlQueryBuiler implements IQueryBuiler
{
    public function useQueryBuiler() : string
    {
        return "MysqlQueryBuilder";
    }
}