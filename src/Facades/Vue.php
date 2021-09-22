<?php

namespace Exolnet\VueData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static array all()
 * @method static int count()
 * @method static bool has($key)
 * @method static bool isEmpty()
 * @method static bool isNotEmpty()
 * @method static mixed get($key, $default = null)
 * @method static string toJson(int $options = 0)
 * @method static void prepend($key, $value)
 * @method static void push($key, $value)
 * @method static void put($key, $value)
 *
 * @see \Illuminate\Support\Collection
 */
class Vue extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'vue';
    }
}
