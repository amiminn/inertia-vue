<?php

namespace App\Services\System;

use Illuminate\Support\Facades\Cache;

class CacheService
{
    public static function put($name, $data = [], $minutes = 10)
    {
        Cache::put($name, $data,  now()->addMinutes($minutes));

        return $data;
    }

    public static function delete($name)
    {
        Cache::forget($name);
    }

    public static function reset()
    {
        Cache::flush();
    }
}
