<?php

namespace classes;

use interfaces\IConnection;

class PostgreConnection implements IConnection
{
    public function useConnection() : string
    {
        return "host=<server_IP_1>,<server_IP_2>,<server_IP_3> \
                port=6432 \
                user=<database_user_name> \
                dbname=<database_name> \
                sslmode=verify-ca";
    }
}