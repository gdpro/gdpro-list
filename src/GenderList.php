<?php
namespace GdproList;

class GenderList extends AbstractList
{
    const WOMAN = 0;
    const MAN = 1;

    protected $list = [
        self::WOMAN => 'Woman',
        self::MAN => 'Man'
    ];
}
