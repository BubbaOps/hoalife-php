<?php

namespace BubbaOps\HoalifePhp\Enumerators;

enum State: string
{
    case SENT = 'sent';
    case CREATED = 'created';
    case FAILED = 'failed';
    case QUEUED = 'queued';
    case PROCESSED = 'processed';
}
