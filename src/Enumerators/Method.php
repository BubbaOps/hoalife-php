<?php

namespace BubbaOps\HoalifePhp\Enumerators;

enum Method: string
{
    case MANUAL = 'manual';
    case EMAIL = 'email';
    case NO_TOUCH_MAIL = 'no_touch_mail';
    case CERTIFIED_NO_TOUCH_MAIL = 'certified_no_touch_mail';
}
