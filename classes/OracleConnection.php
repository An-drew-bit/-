<?php

namespace classes;

use interfaces\IConnection;

class OracleConnection implements IConnection
{
    public function useConnection() : string
    {
        return "User Id=scott;Password=tiger;Data Source=oracle";
    }
}