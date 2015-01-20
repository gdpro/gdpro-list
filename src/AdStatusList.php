<?php
namespace GdproList;

class AdStatusList extends AbstractList
{
    /**
     * The individual created the ad, but is still not visible
     */
    const CREATED = 1;

    /**
     * The admin check the ad and validated it to be visible to others
     * user
     */
    const VALIDATED = 6;

    /**
     * The admin check the ad and moderate it. The ad can't be visible to
     * other user
     */
    const MODERATED = 3;

    /**
     * The individual choose a quotation, the ad is no longer open. We close it
     */
    const CLOSED = 5;

    /**
     * @deprecated
     */
    const WAITING_FOR_MODERATION = 2;

    /**
     * @deprecated
     */
    const PUBLISHED = 3;

    /**
     * @deprecated
     */
    const WAITING_FOR_MODIFICATION = 4;

    protected $list = [
        self::CREATED => 'Created',
        self::VALIDATED => 'Validated',
        self::MODERATED => 'Moderated',
        self::CLOSED => 'Closed',
        self::WAITING_FOR_MODERATION => 'Waiting for moderation',
        self::PUBLISHED => 'Published',
        self::WAITING_FOR_MODIFICATION => 'Waiting for modification',
    ];
}
