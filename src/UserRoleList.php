<?php
namespace GdproList;

/**
 * Class AccountTypeList
 * @package GdproList
 */
class UserRoleList extends AbstractList
{
    const GUEST = 1;
    const ADMINISTRATOR = 2;
    const PROFESSIONAL = 3;
    const INDIVIDUAL = 4;
    const CUSTOMER = 5;
    const MANAGER = 6;

    protected $list = [
        self::GUEST => 'Guest',
        self::ADMINISTRATOR => 'Administrator',
        self::PROFESSIONAL => 'Professional',
        self::INDIVIDUAL => 'Individual',
        self::CUSTOMER => 'Customer',
        self::MANAGER => 'Manager'
    ];
}
