<?php

namespace App\Database;

class Connection
{

    public static function make($config): \PDO
    {
        try {
            return new \PDO(
                $config['connection']."../database/".$config['database'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }
}
