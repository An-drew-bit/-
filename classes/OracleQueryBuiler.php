<?php

namespace classes;

use interfaces\IQueryBuiler;

class OracleQueryBuiler implements IQueryBuiler
{
    public function useQueryBuiler() : string
    {
        return "OracleQueryBuiler";
    }
}