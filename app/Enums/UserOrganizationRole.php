<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static DEFAULT()
 * @method static static OptionThree()
 */
final class UserOrganizationRole extends Enum
{
    const ADMIN =   0;
    const DEFAULT =   1;
    const OptionThree = 2;
}
