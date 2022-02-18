<?php

namespace factories;

use classes\{PostgreConnection, PostgreRecrord, PostgreQueryBuiler};
use interfaces\{IConnection, IQueryBuiler, IRecrord};

class PostgreFactory extends DBFactory
{
    public function createConnection() : IConnection
    {
        return new PostgreConnection();
    }

    public function createRecrord() : IRecrord
    {
        return new PostgreRecrord();
    }

    public function createQueryBuiler() : IQueryBuiler
    {
        return new PostgreQueryBuiler();
    }
}