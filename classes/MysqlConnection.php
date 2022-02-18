<?php

namespace classes;

use interfaces\IConnection;

class MysqlConnection implements IConnection
{
    public function useConnection() : string
    {
        return mysqli_connect("host", "dbname", "login", "pass");
    }
}