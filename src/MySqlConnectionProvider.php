<?php

namespace Likemusic\LaravelMysqlFloat;

use Illuminate\Database\Connection;
use Illuminate\Support\ServiceProvider;

class MySqlConnectionProvider extends ServiceProvider
{
    public function register()
    {
        Connection::resolverFor('mysql', function ($connection, $database, $prefix, $config) {
            return new MySqlConnection($connection, $database, $prefix, $config);
        });
    }
}
