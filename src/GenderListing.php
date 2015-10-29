<?php
namespace Gdpro\Listing;

/**
 * Class GenderListing
 * @package Gdpro\Listing
 */
class GenderListing extends AbstractListing
{
    const MALE = 1;
    const FEMALE = 2;

    protected $list = [
        self::MALE => 'Male',
        self::FEMALE => 'Female'
    ];
}
