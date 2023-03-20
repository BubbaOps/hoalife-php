<?php

namespace BubbaOps\HoalifePhp\Traits\Enums;

use BackedEnum;

trait IsInvokable
{
    use IsCollectable;

    public static function __callStatic($name, $args): string|int|null
    {
        $enum = static::tryFromName($name);

        if ($enum === null) {
            return null;
        }

        /** @phpstan-ignore-next-line */
        return $enum instanceof BackedEnumAlias ? $enum->value : $enum->name;
    }

    public static function tryFromName(string $case): ?static
    {
        return static::collect()->first(function ($enum) use ($case) {
            return strtolower($enum->name) === strtolower($case);
        });
    }

    public function __invoke(): string|int
    {
        return $this instanceof BackedEnum ? $this->value : $this->name;
    }
}
