<?php

namespace BubbaOps\HoalifePhp\Traits\Enums;

use BackedEnum;

trait HasValues
{
    /** Get an array of case values. */
    public static function values(): array
    {
        $cases = static::cases();

        /** @phpstan-ignore-next-line */
        return isset($cases[0]) && $cases[0] instanceof BackedEnum
            ? array_column($cases, 'value')
            : array_column($cases, 'name');
    }
}
