<?php

use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {
    function setting(string $key, string $default = ''): string
    {
        return Cache::remember("setting_{$key}", 3600, function () use ($key, $default) {
            $s = \App\Models\Setting::where('key', $key)->first();
            return $s ? (string) $s->value : $default;
        });
    }
}
