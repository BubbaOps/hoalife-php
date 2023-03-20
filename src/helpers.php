<?php

// @codeCoverageIgnoreStart
if (! function_exists('hoa_env')) {
    // @codeCoverageIgnoreEnd
    /**
     * Gets the value of an environment variable.
     */
    function hoa_env(string $key, mixed $default = null): mixed
    {
        if (function_exists('env')) {
            return env($key, $default);
        }

        return $_ENV[$key] ?? $default;
    }
}
