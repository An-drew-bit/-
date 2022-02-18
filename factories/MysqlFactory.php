<?php

namespace factories;

use classes\{MysqlConnection, MysqlQueryBuiler ,MysqlRecrord};
use interfaces\{IConnection, IQueryBuiler, IRecrord};

class MysqlFactory extends DBFactory
{
    public function createConnection() : IConnection
    {
        return new MysqlConnection();
    }

    public function createRecrord() : IRecrord
    {
        return new MysqlRecrord();
    }

    public function createQueryBuiler() : IQueryBuiler
    {
        return new MysqlQueryBuiler();
    }
}