<?php

use factories\{DBFactory, MysqlFactory, PostgreFactory, OracleFactory};

function createDB(DbFactory $factory)
{

    $connection = $factory->createConnection();
    $recrord = $factory->createRecrord();
    $queryBuiler = $factory->createQueryBuiler();

    echo $connection->useConnection() . "\n" . $recrord->useRecrord(). "\n" .$queryBuiler->useQueryBuiler()."<br>";

}

createDB(new MysqlFactory());
createDB(new PostgreFactory());
createDB(new OracleFactory());