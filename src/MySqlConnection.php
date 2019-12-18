<?php

namespace Likemusic\LaravelMysqlFloat;

use Illuminate\Database\MySqlConnection as BaseMySqlConnection;
use Likemusic\LaravelMysqlFloat\MySqlGrammar as SchemaGrammar;

class MySqlConnection extends BaseMySqlConnection
{
    public function getSchemaBuilder()
    {
        $mySqlBuilder = parent::getSchemaBuilder();

        $mySqlBuilder->blueprintResolver(function (...$args) {
            return new Blueprint(...$args);
        });

        return $mySqlBuilder;
    }

    protected function getDefaultSchemaGrammar()
    {
        return $this->withTablePrefix(new SchemaGrammar);
    }
}
