<?php

namespace BubbaOps\HoalifePhp\Enumerators;

use BubbaOps\HoalifePhp\Traits\Enums\HasValues;
use BubbaOps\HoalifePhp\Traits\Enums\IsInvokable;

enum Type: string
{
    use HasValues;
    use IsInvokable;

    case ACCOUNT = 'account';
    case PAYLOAD = 'payload';
    case PROPERTY = 'property';
    case VIOLATION = 'violation';
    case VIOLATION_DELIVERY = 'violation_delivery';
}
