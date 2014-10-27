<?php
namespace GdproList;

/**
 * Class AccountTypeList
 * @package GdproList
 * @deprecated
 */
class AccountTypeList extends AbstractList
{
    const ADMINISTRATOR = 1;
    const PROFESSIONAL = 2;
    const INDIVIDUAL = 3;

    protected $list = [
        self::ADMINISTRATOR => 'Administrator',
        self::PROFESSIONAL => 'Professional',
        self::INDIVIDUAL => 'Individual'
    ];
}
