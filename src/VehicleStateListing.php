<?php
namespace Gdpro\Listing;

/**
 * Class VehicleStateListing
 * @package Gdpro\Listing
 */
class VehicleStateListing extends AbstractListing
{
    const IS_NEW = 1;
    const AS_NEW = 2;
    const EXCELLENT_STATE = 3;
    const VERY_GOOD_STATE = 4;
    const GOOD_STATE = 5;
    const MEDIUM_STATE = 6;
    const BAD_STATE = 7;
    const VERY_BAD_STATE = 8;
    const CANT_MOVE = 9;
    const GOOD_FOR_SCRAP = 10;

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