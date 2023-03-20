<?php

namespace BubbaOps\HoalifePhp\Traits\Enums;

use Illuminate\Support\Collection;

trait IsCollectable
{
    public static function collect(): Collection
    {
        return new Collection(items: static::cases());
    }
}
