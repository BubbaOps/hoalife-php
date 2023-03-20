<?php

namespace BubbaOps\HoalifePhp\Interfaces;

/**
 * @property string $baseUrl
 * @property string $apiKey
 * @property string $signingSecret
 */
interface IConfig
{
    public function __toString(): string;

    public function toJson(): string;

    public function toArray(): array;
}
