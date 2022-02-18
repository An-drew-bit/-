<?php

namespace factories;

use classes\{OracleConnection, OracleRecrord, OracleQueryBuiler};
use interfaces\{IConnection, IQueryBuiler, IRecrord};

class OracleFactory extends DBFactory
{
    public function createConnection() : IConnection
    {
        return new OracleConnection();
    }

    public function createRecrord() : IRecrord
    {
        return new OracleRecrord();
    }

    public function createQueryBuiler() : IQueryBuiler
    {
        return new OracleQueryBuiler();
    }
}