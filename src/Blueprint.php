<?php

namespace Likemusic\LaravelMysqlFloat;

use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    public function float($column, $total = null, $places = null)
    {
        return $this->addColumn('float', $column, compact('total', 'places'));
    }
}
