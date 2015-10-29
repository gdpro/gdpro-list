<?php
namespace Gdpro\Listing;

class AdStatusListing extends AbstractListing
{
    /**
     * The individual created the ad, but is still not visible
     */
    const CREATED = 1;

    /**
     * The admin check the ad and moderate it. The ad can't be visible to
     * other user
     */
    const MODERATED = 2;

    /**
     * The admin check the ad and validated it to be visible to others
     * user
     */
    const VALIDATED = 3;

    /**
     * The individual choose a quotation, the ad is no longer open. We close it
     */
    const CLOSED = 4;

    protected $list = [
        self::CREATED => 'Created',
        self::MODERATED => 'Moderated',
        self::VALIDATED => 'Validated',
        self::CLOSED => 'Closed'
    ];
}
