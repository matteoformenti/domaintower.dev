<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static REDIRECT()
 * @method static static LANDING()
 * @method static static EMPTY()
 */
final class ManagedDomainOperation extends Enum
{
    const REDIRECT = 0;
    const LANDING = 1;
    const EMPTY = 2;
}
