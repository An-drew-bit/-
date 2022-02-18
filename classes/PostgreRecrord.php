<?php

namespace classes;

use interfaces\IRecrord;

class PostgreRecrord implements IRecrord
{
    public function useRecrord() : string
    {
        return "PostgreSQLQueryBuilder";
    }
}