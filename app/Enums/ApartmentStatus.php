<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ApartmentStatus extends Enum
{
    const OptionOne =   1;
    const OptionTwo =   2;
    const OptionThree = 3;
}
