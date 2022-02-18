<?php

namespace factories;

use interfaces\{IConnection, IRecrord, IQueryBuiler};

abstract class DBFactory
{
    abstract public function createConnection() : IConnection;
    abstract public function createRecrord() : IRecrord;
    abstract public function createQueryBuiler() : IQueryBuiler;

    public function combineConnectionRecordQueryBuiler()
    {
        $connection = $this->createConnection();
        $recrord = $this->createRecrord();
        $queryBuiler = $this->createQueryBuiler();
    }
}