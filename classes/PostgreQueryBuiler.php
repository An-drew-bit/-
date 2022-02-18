<?php

namespace classes;

use interfaces\IQueryBuiler;

class PostgreQueryBuiler implements IQueryBuiler
{
    public function useQueryBuiler() : string
    {
        return "PostgreQueryBuiler";
    }
}