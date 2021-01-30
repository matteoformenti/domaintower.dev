<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static REDIRECT()
 * @method static static LANDING()
 * @method static static FOR_SALE()
 * @method static static EMPTY()
 */
final class ManagedDomainOperation extends Enum
{
    const REDIRECT = 0;
    const LANDING = 1;
    const FOR_SALE = 2;
    const EMPTY = 2;
}
