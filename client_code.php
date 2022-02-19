<?php

use factories\{DBFactory, MysqlFactory, PostgreFactory, OracleFactory};

function createDataBase(DbFactory $factory)
{
    $connection = $factory->createConnection();
    $recrord = $factory->createRecrord();    
    $queryBuiler = $factory->createQueryBuiler();

    echo $connection->useConnection() . "\n" . $recrord->useRecrord(). "\n" .$queryBuiler->useQueryBuiler() . "<br>";
}

createDataBase(new MysqlFactory());
createDataBase(new PostgreFactory());
createDataBase(new OracleFactory());
