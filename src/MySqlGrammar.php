<?php

namespace Likemusic\LaravelMysqlFloat;

use Illuminate\Database\Schema\Grammars\MySqlGrammar as BaseMySqlGrammar;
use Illuminate\Support\Fluent;

class MySqlGrammar extends BaseMySqlGrammar
{
    protected function typeFloat(Fluent $column)
    {
        if ($column->total && $column->places) {
            return "float({$column->total}, {$column->places})";
        }

        return 'float';
    }
}
