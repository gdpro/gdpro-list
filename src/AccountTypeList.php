<?php
namespace GdproList;

class AccountTypeList extends AbstractList
{
    const ADMINISTRATOR = 0;
    const PROFESSIONAL = 1;
    const INDIVIDUAL = 2;

    protected $list = [
        self::ADMINISTRATOR => 'Administrator',
        self::PROFESSIONAL => 'Professional',
        self::INDIVIDUAL => 'Individual'
    ];
}
