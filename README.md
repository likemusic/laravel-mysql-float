# Laravel MySQL Float

This package allows database migrations in Laravel 5 and Laravel 6 to create FLOAT columns in MySQL.

Inspired by [fisharebest/laravel-floats](https://github.com/fisharebest/laravel-floats).

Implemented with more lower level.

At the moment I test it only with Laravel 5.4.

To use at Laravel 5.4 (without auto-discovery packages providers) add in `config/app.php` to `providers` array provider 
`\Likemusic\LaravelMysqlFloat\MySqlConnectionProvider::class`.

# How does this package work?

It overrides `Illuminate\Database\Schema\Grammars\MySqlGrammar::typeFloat(Fluent $column)` to
```
    protected function typeFloat(Fluent $column)
    {
        if ($column->total && $column->places) {
            return "float({$column->total}, {$column->places})";
        }

        return 'float';
    }
```

instead of default `$this->typeDouble()`.

Also it change signature for `Illuminate\Database\Schema\Blueprint::float($column, $total = 8, $places = 2)` 
to `float($column, $total = null, $places = null)`.

And also contains some classes for using this overrides by using custom resolvers.

## TODO
- Add tests
