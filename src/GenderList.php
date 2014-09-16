<?php
namespace GdproList;

class GenderList extends AbstractList
{
    const MAN = 1;
    const WOMAN = 2;

    protected $list = [
        self::WOMAN => 'Woman',
        self::MAN => 'Man'
    ];
}
