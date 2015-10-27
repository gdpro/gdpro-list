<?php
namespace GdproList;

class GenderList extends AbstractList
{
    const MALE = 1;
    const FEMALE = 2;

    protected $list = [
        self::MALE => 'Male',
        self::FEMALE => 'Female'
    ];
}
