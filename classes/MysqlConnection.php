<?php

use interfaces\IConnection;

class mysqlConnection implements IConnection
{
    public function useConnection() : string
    {
        return mysqli_connect("host", "dbname", "login", "pass");
    }
}