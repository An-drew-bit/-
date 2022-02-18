<?php

namespace classes;

use interfaces\IRecrord;

class OracleRecrord implements IRecrord
{
    public function useRecrord() : string
    {
        return "OracleRecrord";
    }
}