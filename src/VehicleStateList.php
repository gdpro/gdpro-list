<?php
namespace GdproList;

class VehicleStateList extends AbstractList
{
    const IS_NEW = 0;
    const AS_NEW = 1;
    const EXCELLENT_STATE = 2;
    const VERY_GOOD_STATE = 3;
    const GOOD_STATE = 4;
    const MEDIUM_STATE = 5;
    const BAD_STATE = 6;
    const VERY_BAD_STATE = 7;
    const CANT_MOVE = 8;
    const GOOD_FOR_SCRAP = 9;

    protected $list = [
        self::IS_NEW => 'New',
        self::AS_NEW => 'As new',
        self::EXCELLENT_STATE => 'Excellent state',
        self::VERY_GOOD_STATE => 'Very good state',
        self::GOOD_STATE => 'Good state',
        self::MEDIUM_STATE => 'Medium state',
        self::BAD_STATE => 'Bad state',
        self::VERY_BAD_STATE => 'Very bad state',
        self::CANT_MOVE => 'Can\'t move',
        self::GOOD_FOR_SCRAP => 'Good for scrap'
    ];
}